<?php

namespace App\Livewire\Admin\Drawings;

use App\Models\Drawing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditDrawings extends Component
{
    use WithFileUploads;

    public $drawing;
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

    public function mount(Drawing $drawing)
    {

        $this->drawing = $drawing;
        $this->title = $drawing->title;
        $this->url_instagram = $drawing->url_instagram;

        if ($drawing->img_url) {
            $this->img_url = asset('/storage/' . $drawing->img_url);
        }

        if (!Auth::user() || $drawing->user_id !== Auth::user()->id) {
            return $this->redirect('/');
        }
    }

    public function submit()
    {
        $this->validate();

        $url = $this->drawing->img_url;
        if ($this->img_url && !is_string($this->img_url)) {
            if ($this->drawing->img_url) {
                Storage::disk('public')->delete($this->drawing->img_url);
            }
            $url = $this->img_url->store('imgProj', 'public');
        }

        $this->drawing->update([
            'img_url' => $url,
            'title' => $this->title,
            'url_instagram' => $this->url_instagram,
        ]);

        session()->flash('message', 'Elemento modificato con successo!');

        return $this->redirect('/admin/drawings-home', navigate: true);
    }
    public function render()
    {
        return view('livewire.admin.drawings.edit-drawings');
    }
}
