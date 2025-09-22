<?php

namespace App\Livewire\Guest\Components;

use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Trainings extends Component
{
    public function render()
    {
        $trainings = Training::where('user_id', Auth::id())->get();
        return view('livewire.guest.components.trainings', compact('trainings'));
    }
}
