<?php

namespace App\Livewire\Guest\Pages;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjectsPage extends Component
{
    public function render()
    {
        $projects = Project::where('user_id', 1)->get();
        return view('livewire.guest.pages.projects-page', compact('projects'))->layout('layouts.guest');
    }
}
