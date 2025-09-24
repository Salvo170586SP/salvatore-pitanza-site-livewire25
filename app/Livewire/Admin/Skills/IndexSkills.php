<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Document;
use App\Models\Skill;
use App\Models\SkillGeneralInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IndexSkills extends Component
{
    use WithFileUploads;
    public $name_doc;
    public $doc_url = null;



    protected $rules = [
        'doc_url' => 'required',
        'name_doc' => 'nullable',
    ];

    protected $messages = [
        'doc_url.required' => 'Campo obbligatorio',
    ];

    public function deleteSkill($skill_id)
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

    public function deleteSkillInfo($skillInfo_id)
    {
        $skillInfo = SkillGeneralInfo::findOrFail($skillInfo_id);

        if ($skillInfo) {
            $skillInfo->delete();
            session()->flash('message', 'Elemento eliminato con successo!');
        }
    }

    public function deleteDoc($doc_id)
    {
        $doc = Document::findOrFail($doc_id);

        if ($doc) {
            if ($doc->url_icon) {
                Storage::disk('public')->delete($doc->doc_url);
            }
            $doc->delete();
            session()->flash('message', 'Documento eliminato con successo!');
        }
    }

    public function addDocument()
    {
        $this->validate();

        if ($this->doc_url) {
            $url = $this->doc_url->store('docs', 'public');
            $originalName = $this->doc_url->getClientOriginalName();
        }

        Document::create([
            'user_id' => Auth::id(),
            'doc_url' => $url,
            'name_doc' => $originalName,
        ]);

        session()->flash('message', 'Documento caricato con successo!');

        return $this->redirect('/admin/skills-home', navigate: true);
    }

    public function render()
    {
        $skills = Skill::where('user_id', Auth::id())->latest()->get();
        $documents = Document::where('user_id', Auth::id())->latest()->get();
        $skillInfo = SkillGeneralInfo::where('user_id', Auth::id())->first();
        return view('livewire.admin.skills.index-skills', compact('skills', 'skillInfo', 'documents'));
    }
}
