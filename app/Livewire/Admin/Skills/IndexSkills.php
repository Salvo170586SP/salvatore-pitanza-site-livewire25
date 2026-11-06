<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use App\Models\SkillGeneralInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class IndexSkills extends Component
{
    public function deleteSkill(int $skill_id)
    {
        $skill = Skill::findOrFail($skill_id);

        if ($skill) {
            if ($skill->url_icon) {
                Storage::disk('public')->delete($skill->url_icon);
            }

            $skill->delete();
            session()->flash('message', 'Elemento eliminato con successo!');
        }
    }

    public function deleteSkillInfo(int $skillInfo_id)
    {
        $skillInfo = SkillGeneralInfo::findOrFail($skillInfo_id);

        if ($skillInfo) {
            $skillInfo->delete();
            session()->flash('message', 'Elemento eliminato con successo!');
        }
    }

    public function render()
    {
        $skills = Skill::where('user_id', Auth::id())->latest()->get();
        $skillInfo = SkillGeneralInfo::where('user_id', Auth::id())->first();
        return view('livewire.admin.skills.index-skills', compact('skills', 'skillInfo'));
    }
}
