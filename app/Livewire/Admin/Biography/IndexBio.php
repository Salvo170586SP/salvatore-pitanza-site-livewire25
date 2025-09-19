<?php

namespace App\Livewire\Admin\Biography;

use App\Models\Biography;
use Livewire\Component;

class IndexBio extends Component
{
    public function deleteBio($bio_id)
    {
        $biography = Biography::findOrFail($bio_id);

        if ($biography) {
            $biography->delete();
            session()->flash('message', 'Biografia eliminata con successo!');
        }
    }

    public function render()
    {
        $biography = Biography::first();

        return view('livewire.admin.biography.index-bio', compact('biography'));
    }
}
