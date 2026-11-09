<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateExperiences extends Component
{
    public string $title = '';
    public ?string $end_date = null;
    public ?string $start_date = null;
    public string $description = '';

    protected $rules = [
        'title' => 'required|max:64',
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date',
        'description' => 'required|string|max:16383',
    ];

    protected $messages = [
       'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo 64 cartteri',
        'start_date.date' => 'Deve essere una data',
        'end_date.date' => 'Deve essere una data',
        'description.required' => 'Campo obbligatorio',
        'description.max' => 'Massimo 16383 caratteri',
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
