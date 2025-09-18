<?php

namespace App\Livewire\Guest\Pages;

use Livewire\Component;

class AboutMe extends Component
{
    public function render()
    {
        return view('livewire.guest.pages.about-me')->layout('layouts.guest');
    }
}
