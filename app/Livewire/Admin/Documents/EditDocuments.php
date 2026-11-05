<?php

namespace App\Livewire\Admin\Documents;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class EditDocuments extends Component
{
    use WithFileUploads;

    public Document $document;
    public string $name_doc = 'Curriculum Vitae';
    public ?UploadedFile $new_doc_url = null;

    protected $rules = [
        'name_doc' => 'required|max:64',
        'new_doc_url' => 'nullable|file|mimes:pdf|max:5120',
    ];

    protected $messages = [
        'name_doc.required' => 'Campo obbligatorio',
        'name_doc.max' => 'Massimo 64 cartteri',
        'new_doc_url.mimes' => 'Formato consentito: PDF',
        'new_doc_url.max' => 'Dimensione massima 5 MB',
    ];

    public function mount(Document $document)
    {
        $this->document = $document;
        $this->name_doc = $document->name_doc;
    }

    public function submit()
    {
        $this->validate();

        $data = ['name_doc' => $this->name_doc];

        if ($this->new_doc_url) {
            if ($this->document->doc_url) {
                Storage::disk('public')->delete($this->document->doc_url);
            }

            $data['doc_url'] = $this->new_doc_url->store('docs', 'public');
        }

        $this->document->update($data);

        session()->flash('message', 'Elemento aggiornato con successo!');

        return $this->redirect('/admin/documents-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.documents.edit-documents');
    }
}
