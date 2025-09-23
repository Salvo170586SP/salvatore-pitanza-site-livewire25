<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateExperiences extends Component
{
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

    public function submit()
    {
        $this->validate();

        Experience::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Esperienza creata con successo!');

        return $this->redirect('/admin/experiences-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.experiences.create-experiences');
    }
}
