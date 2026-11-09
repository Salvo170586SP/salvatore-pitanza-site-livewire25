<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditExperiences extends Component
{

    public Experience $experience;
    public string $title = '';
    public ?string $start_date = null;
    public ?string $end_date = null;
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

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
        $this->title = $experience->title;
        $this->start_date = $experience->start_date?->format('Y-m-d');
        $this->end_date = $experience->end_date?->format('Y-m-d');
        $this->description = $experience->description;

        if (!Auth::user() || $experience->user_id !== Auth::user()->id) {
            return $this->redirect('/');
        }
    }

    public function submit()
    {
        $this->start_date = blank($this->start_date) ? null : $this->start_date;
        $this->end_date = blank($this->end_date) ? null : $this->end_date;

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
