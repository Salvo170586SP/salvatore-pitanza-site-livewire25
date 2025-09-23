<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexExperiences extends Component
{
    public function deleteExperience($experience_id)
    {
        $experience = Experience::findOrFail($experience_id);

        if ($experience) {
            $experience->delete();
            session()->flash('message', 'Esperienza eliminata con successo!');
        }
    }

    public function render()
    {
        $experiences = Experience::where('user_id', Auth::id())->latest()->get();
        return view('livewire.admin.experiences.index-experiences', compact('experiences'));
    }
}
