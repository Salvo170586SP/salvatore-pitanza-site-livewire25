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

    protected $rules = [
        'url_icon' => 'required',
        'name' => 'required|max:64',
    ];

    protected $messages = [
        'url_icon.required' => 'Campo obbligatorio',
        'name.required' => 'Campo obbligatorio',
        'name.max' => 'Massimo 64 cartteri',
    ];

    public function submit()
    {
        $this->validate();

        if ($this->url_icon) {
            $url = $this->url_icon->store('imgsSkill', 'public');
        }

        Skill::create([
            'user_id' => Auth::id(),
            'url_icon' => $url,
            'name' => $this->name,
        ]);

        session()->flash('message', 'Elemento creato con successo!');

        return $this->redirect('/admin/skills-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.skills.create-skills');
    }
}
