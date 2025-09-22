<?php

namespace App\Livewire\Admin\Trainings;

use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TrainingsIndex extends Component
{
    public function deleteTraining($training_id)
    {
        $training = Training::findOrFail($training_id);

        if ($training) {
            $training->delete();
            session()->flash('message', 'Percorso eliminato con successo!');
        }
    }

    public function render()
    {
        $trainings = Training::where('user_id', Auth::id())->latest()->get();
        return view('livewire.admin.trainings.trainings-index', compact('trainings'));
    }
}
