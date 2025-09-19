<?php

namespace App\Livewire\Guest\Components;

use App\Models\Biography;
use Livewire\Component;

class Jumbotron extends Component
{
    public function render()
    {
        $biography = Biography::first();
        return view('livewire.guest.components.jumbotron', compact('biography'));
    }
}
