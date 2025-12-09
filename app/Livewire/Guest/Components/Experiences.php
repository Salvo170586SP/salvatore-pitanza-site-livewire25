<?php

namespace App\Livewire\Guest\Components;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Experiences extends Component
{
    public function render()
    {
        $experiences = Experience::where('user_id', 1)->latest()->get();
        return view('livewire.guest.components.experiences', compact('experiences'));
    }
}
