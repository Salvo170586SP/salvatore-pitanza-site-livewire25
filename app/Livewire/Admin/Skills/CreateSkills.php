<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateSkills extends Component
{
    use WithFileUploads;

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

    public function submit()
    {
        $this->validate();

        $url = null;
        if ($this->url_icon) {
            $url = $this->url_icon->store('imgsSkill', 'public');
        }

        Skill::create([
            'user_id' => Auth::id(),
            'url_icon' => $url,
            'name' => $this->name,
            'type' => $this->type,
        ]);

        session()->flash('message', 'Elemento creato con successo!');

        return $this->redirect('/admin/skills-home', navigate: true);
    }

    public function render()
    {
        $types = config('siteConfig.types');
        return view('livewire.admin.skills.create-skills', compact('types'));
    }
}
