<?php

namespace App\Livewire\Guest\Pages;

use Livewire\Component;

class ErrorPage extends Component
{
    public function render()
    {
        return view('livewire.guest.pages.error-page')->layout('layouts.guest');
    }
}
