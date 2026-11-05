<?php

namespace App\Livewire\Admin\Documents;

use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class IndexDocuments extends Component
{
    public function deleteDoc(int $doc_id)
    {
        $doc = Document::findOrFail($doc_id);

        if ($doc) {
            if ($doc->img_url) {
                Storage::disk('public')->delete($doc->img_url);
            }
            $doc->delete();
            session()->flash('message', 'Elemento eliminato con successo!');
        }
    }

    public function render()
    {
        $documents = Document::where('user_id', Auth::id())->get();
        return view('livewire.admin.documents.index-documents', compact('documents'));
    }
}
