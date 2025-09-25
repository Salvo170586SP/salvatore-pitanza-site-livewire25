<?php

namespace App\Livewire\Guest\Pages;

use App\Models\Drawing;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Drawings extends Component
{
    public function render()
    {
        $drawings = Drawing::where('user_id', Auth::id())->get();
        return view('livewire.guest.pages.drawings', compact('drawings'))->layout('layouts.guest');
    }
}
