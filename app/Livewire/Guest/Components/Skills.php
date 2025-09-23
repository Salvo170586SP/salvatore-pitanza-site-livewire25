<?php

namespace App\Livewire\Guest\Components;

use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Skills extends Component
{
    public function render()
    {
        $skills = Skill::where('user_id', Auth::id())->get();
        return view('livewire.guest.components.skills', compact('skills'));
    }
}
