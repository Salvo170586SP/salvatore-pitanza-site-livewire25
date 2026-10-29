<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateExperiences extends Component
{
    public string $title;
    public string $end_date;
    public string $start_date;
    public string $description;

    protected $rules = [
        'title' => 'required|max:64',
        'end_date' => 'date',
        'start_date' => 'date',
        'description' => 'required',
    ];

    protected $messages = [
        'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo 64 cartteri',
        'start_date.required' => 'Il campo è una data',
        'end_date.required' => 'Il campo è una data',
        'description.required' => 'Campo obbligatorio',
    ];

    public function submit()
    {
        $this->validate();

        Experience::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
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
