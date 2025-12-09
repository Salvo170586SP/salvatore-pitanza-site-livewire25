<?php

namespace App\Livewire\Guest\Pages;

use App\Models\Document;
use App\Models\Skill;
use App\Models\SkillGeneralInfo;
use Livewire\Component;

class SkillsPage extends Component
{
    public function render()
    {
        $skillsCode = Skill::where('user_id', 1)->where('type', 'code')->get();
        $skillsDb = Skill::where('user_id', 1)->where('type', 'db')->get();
        $skillsTool = Skill::where('user_id', 1)->where('type', 'tool')->get();

        $skillInfo = SkillGeneralInfo::where('user_id', 1)->first();
        $documents = Document::where('user_id', 1)->get();
        return view('livewire.guest.pages.skills-page', compact('skillsCode','skillsDb','skillsTool', 'skillInfo','documents'))->layout('layouts.guest');
    }
}
