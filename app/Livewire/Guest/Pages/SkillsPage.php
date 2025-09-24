<?php

namespace App\Livewire\Guest\Pages;

use App\Models\Document;
use App\Models\Skill;
use App\Models\SkillGeneralInfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SkillsPage extends Component
{
    public function render()
    {
        $skills = Skill::where('user_id', Auth::id())->get();
        $skillInfo = SkillGeneralInfo::where('user_id', Auth::id())->first();
        $documents = Document::where('user_id', Auth::id())->get();
        return view('livewire.guest.pages.skills-page', compact('skills', 'skillInfo','documents'))->layout('layouts.guest');
    }
}
