<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditExperiences extends Component
{

    public $experience;
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required|max:64',
        'description' => 'required',
    ];

    protected $messages = [
        'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo 64 cartteri',
        'description.required' => 'Campo obbligatorio',
    ];

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
        $this->title = $experience->title;
        $this->description = $experience->description;

        if (!Auth::user() || $experience->user_id !== Auth::user()->id) {
            return $this->redirect('/');
        }
    }

    public function submit()
    {
        $this->validate();

        $this->experience->update([
            'title' =>  $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Esperienza modificata con successo!');

        return $this->redirect('/admin/experiences-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.experiences.edit-experiences');
    }
}
