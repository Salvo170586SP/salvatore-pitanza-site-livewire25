<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexProjects extends Component
{
    public function deleteProject($project_id)
    {
        $project = Project::findOrFail($project_id);

        if ($project) {
            $project->delete();
            session()->flash('message', 'Progetto eliminato con successo!');
        }
    }


    public function render()
    {
        $projects = Project::where('user_id', Auth::id())->latest()->get();
        return view('livewire.admin.projects.index-projects', compact('projects'));
    }
}
