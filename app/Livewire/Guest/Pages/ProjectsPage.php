<?php

namespace App\Livewire\Guest\Pages;

use App\Models\Project;
use Livewire\Component;

class ProjectsPage extends Component
{
    public string $filter = 'all';

    public function render()
    {
        $projectsQuery = Project::where('user_id', 1);

        if ($this->filter === 'completed') {
            $projectsQuery->where('is_available', true);
        } elseif ($this->filter === 'development') {
            $projectsQuery->where('is_available', false);
        }

        $projects = $projectsQuery->get();

        return view('livewire.guest.pages.projects-page', compact('projects'))->layout('layouts.guest');
    }
}
