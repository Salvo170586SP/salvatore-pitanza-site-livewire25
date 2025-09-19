<?php

namespace App\Livewire\Guest\Components;

use App\Models\Biography;
use Livewire\Component;

class AboutMe extends Component
{
    public function render()
    {
        $biography = Biography::first();

        return view('livewire.guest.components.about-me', compact('biography'));
    }
}
