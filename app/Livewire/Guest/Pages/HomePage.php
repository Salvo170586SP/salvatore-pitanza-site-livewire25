<?php

namespace App\Livewire\Guest\Pages;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.guest.pages.home-page')->layout('layouts.guest');
    }
}
