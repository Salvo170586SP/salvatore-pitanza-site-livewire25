<?php

namespace App\Livewire\Admin\Skills;

use App\Models\SkillGeneralInfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditGeneralDescription extends Component
{
    public $skillInfo;
    public $general_description;

    protected $rules = [
        'general_description' => 'required',
    ];

    protected $messages = [
        'general_description.required' => 'Campo obbligatorio',
    ];

    public function mount(SkillGeneralInfo $skillInfo)
    {
        $this->skillInfo = $skillInfo;
        $this->general_description = $skillInfo->general_description;

        if (!Auth::user() || $skillInfo->user_id !== Auth::user()->id) {
            return $this->redirect('/');
        }
    }

    public function submit()
    {
        $this->validate();

        $this->skillInfo->update([
            'general_description' => $this->general_description,
        ]);

        session()->flash('message', 'Elemento modificato con successo!');

        return $this->redirect('/admin/skills-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.skills.edit-general-description');
    }
}
