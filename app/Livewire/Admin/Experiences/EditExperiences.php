<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditExperiences extends Component
{

    public $experience;
    public $title;
    public $start_date;
    public $end_date;
    public $description;

    protected $rules = [
        'title' => 'required|max:64',
        'start_date' => 'date',
        'end_date' => 'date',
        'description' => 'required',
    ];

    protected $messages = [
        'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo 64 cartteri',
        'start_date.date' => 'Deve essere una data',
        'end_date.date' => 'Deve essere una data',
        'description.required' => 'Campo obbligatorio',
    ];

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
        $this->title = $experience->title;
        $this->start_date = $experience->start_date;
        $this->end_date = $experience->end_date;
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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
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
