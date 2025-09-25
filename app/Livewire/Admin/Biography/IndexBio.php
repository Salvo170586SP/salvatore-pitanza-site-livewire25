<?php

namespace App\Livewire\Admin\Biography;

use App\Models\Biography;
use Illuminate\Support\Facades\Auth;
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
        $biography = Biography::where('user_id', Auth::id())->first();

        return view('livewire.admin.biography.index-bio', compact('biography'));
    }
}
