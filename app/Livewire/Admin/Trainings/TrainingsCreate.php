<?php

namespace App\Livewire\Admin\Trainings;

use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TrainingsCreate extends Component
{
    public $icon;
    public $title;
    public $subtitle;
    public $description;

    protected $rules = [
        'icon' => 'required',
        'title' => 'required|max:64',
        'subtitle' => 'required|max:64',
        'description' => 'required',
    ];

    protected $messages = [
        'icon.required' => 'Campo obbligatorio',
        'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo 64 cartteri',
        'subtitle.required' => 'Campo obbligatorio',
        'subtitle.max' => 'Massimo 64 cartteri',
        'description.required' => 'Campo obbligatorio',
    ];

    public function submit()
    {
        $this->validate();

        Training::create([
            'user_id' => Auth::id(),
            'icon' => $this->icon,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Percorso creato con successo!');

        return $this->redirect('/admin/trainings-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.trainings.trainings-create');
    }
}
