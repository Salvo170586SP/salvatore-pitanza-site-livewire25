<?php

namespace App\Livewire\Guest\Pages;

use Livewire\Component;

class ProjectsPage extends Component
{
    public function render()
    {
        return view('livewire.guest.pages.projects-page')->layout('layouts.guest');
    }
}
