<?php

namespace App\Livewire\Admin\Skills;

use App\Models\SkillGeneralInfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateGeneralDescription extends Component
{
    public $general_description;

    protected $rules = [
        'general_description' => 'required',
    ];

    protected $messages = [
        'general_description.required' => 'Campo obbligatorio',
    ];

    public function submit()
    {
        $this->validate();

        SkillGeneralInfo::create([
            'user_id' => Auth::id(),
            'general_description' => $this->general_description,
        ]);

        session()->flash('message', 'Elemento creato con successo!');

        return $this->redirect('/admin/skills-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.skills.create-general-description');
    }
}
