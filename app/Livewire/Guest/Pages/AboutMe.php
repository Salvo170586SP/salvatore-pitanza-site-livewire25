<?php

namespace App\Livewire\Guest\Pages;

use App\Models\Biography;
use Livewire\Component;

class AboutMe extends Component
{
    public function render()
    {
        $biography = Biography::first();
        return view('livewire.guest.pages.about-me', compact('biography'))->layout('layouts.guest');
    }
}
