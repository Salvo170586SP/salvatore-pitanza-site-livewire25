<?php

namespace App\Livewire\Guest\Pages;

use App\Models\Biography;
use App\Models\Document;
use App\Models\Skill;
use Livewire\Component;

class AboutMe extends Component
{
    public function render()
    {
        $biography = Biography::first();
        $document = Document::where('name_doc', 'Curriculum Vitae')->first();

        return view('livewire.guest.pages.about-me', compact('biography', 'document'))->layout('layouts.guest');
    }
}
