<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSkills extends Component
{
    use WithFileUploads;

    public $skill;
    public $url_icon = null;
    public $name;
    public $type;

    protected $rules = [
        'url_icon' => 'nullable',
        'name' => 'required|max:64',
        'type' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Campo obbligatorio',
        'name.max' => 'Massimo 64 cartteri',
        'type.required' => 'Campo obbligatorio',
    ];

    public function mount(Skill $skill)
    {
        $this->skill = $skill;
        $this->name = $skill->name;
        $this->type = $skill->type;

        if ($skill->url_icon) {
            $this->url_icon = asset('/storage/' . $skill->url_icon);
        }

        if (!Auth::user() || $skill->user_id !== Auth::user()->id) {
            return $this->redirect('/');
        }
    }

    public function submit()
    {
        $this->validate();

        $url = $this->skill->url_icon ?? null;
        if ($this->url_icon && !is_string($this->url_icon)) {
            if ($this->skill->url_icon) {
                Storage::disk('public')->delete($this->skill->url_icon);
            }
            $url = $this->url_icon->store('imgsSkill', 'public');
        }

        $this->skill->update([
            'name' => $this->name,
            'url_icon' => $url,
            'type' => $this->type,
        ]);

        session()->flash('message', 'Elemento modificato con successo!');

        return $this->redirect('/admin/skills-home', navigate: true);
    }

    public function render()
    {
        $types = config('siteConfig.types');
        return view('livewire.admin.skills.edit-skills', compact('types'));
    }
}
