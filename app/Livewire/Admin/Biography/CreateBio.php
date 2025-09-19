<?php

namespace App\Livewire\Admin\Biography;

use App\Models\Biography;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBio extends Component
{
    use WithFileUploads;

    public $description;
    public $img_url = null;

    protected $rules = [
        'description' => 'required|max:255',
        'img_url' => 'nullable',
    ];

    protected $messages = [
        'description.required' => 'Campo obbligatorio',
        'description.max' => 'Massimo 255 cartteri',
    ];

    public function submit()
    {
        $this->validate();

        $url = $this->img_url->store('imgBio', 'public');

        Biography::create([
            'user_id' => Auth::id(),
            'description' => $this->description,
            'img_url' => $url,
        ]);

        session()->flash('message', 'Biografia creata con successo!');

        return $this->redirect('/admin/biography-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.biography.create-bio');
    }
}
