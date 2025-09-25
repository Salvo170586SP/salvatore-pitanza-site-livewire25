<?php

namespace App\Livewire\Admin\Drawings;

use App\Models\Drawing;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateDrawings extends Component
{
    use WithFileUploads;

    public $title;
    public $img_url = null;
    public $url_instagram;

    protected $rules = [
        'title' => 'required|max:64',
        'img_url' => 'nullable',
        'url_instagram' => 'nullable',
    ];

    protected $messages = [
        'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo 64 cartteri',
    ];

    public function submit()
    {
        $this->validate();

        $url = $this->img_url;

        if ($this->img_url) {
            $url = $this->img_url->store('imgsDraw', 'public');
        }

        Drawing::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'img_url' => $url,
            'url_instagram' => $this->url_instagram,
        ]);

        session()->flash('message', 'Elemento creato con successo!');

        return $this->redirect('/admin/drawings-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.drawings.create-drawings');
    }
}
