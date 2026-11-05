<?php

namespace App\Livewire\Admin\Documents;

use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class CreateDocuments extends Component
{
    use WithFileUploads;

    public string $name_doc = 'Curriculum Vitae';
    public ?TemporaryUploadedFile $doc_url = null;

    protected $rules = [
        'name_doc' => 'required|max:64',
        'doc_url' => 'required|file|mimes:pdf|max:5120',
    ];

    protected $messages = [
        'name_doc.required' => 'Campo obbligatorio',
        'name_doc.max' => 'Massimo 64 cartteri',
        'doc_url.required' => 'Campo obbligatorio',
        'doc_url.mimes' => 'Formato consentito: PDF',
        'doc_url.max' => 'Dimensione massima 5 MB',
    ];

    public function submit()
    {
        $this->validate();

        $url = $this->doc_url;

        if ($this->doc_url) {
            $url = $this->doc_url->store('docs', 'public');
        }

        Document::create([
            'user_id' => Auth::id(),
            'name_doc' => $this->name_doc,
            'doc_url' => $url,
        ]);

        session()->flash('message', 'Elemento creato con successo!');

        return $this->redirect('/admin/documents-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.documents.create-documents');
    }
}
