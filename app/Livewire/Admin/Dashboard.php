<?php

namespace App\Livewire\Admin;

use App\Models\Document;
use App\Models\Drawing;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $projectsCount = Project::all()->count();
        $experiencesCount = Experience::all()->count();
        $skillsCount = Skill::all()->count();
        $drawingsCount = Drawing::all()->count();
        $documentsCount = Document::all()->count();
        
        return view('livewire.admin.dashboard', compact('projectsCount', 'experiencesCount','skillsCount', 'drawingsCount', 'documentsCount'));
    }
}
