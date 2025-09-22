<?php

namespace App\Livewire\Guest\Components;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        $projects = Project::where('user_id', Auth::id())->get();
        return view('livewire.guest.components.projects', compact('projects'));
    }
}
