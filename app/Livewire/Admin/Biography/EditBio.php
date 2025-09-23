<?php

namespace App\Livewire\Admin\Biography;

use App\Models\Biography;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBio extends Component
{
    use WithFileUploads;

    public $biography;
    public $description;
    public $img_url;

    protected $rules = [
        'description' => 'required',
        'img_url' => 'nullable',
    ];

    protected $messages = [
        'description.required' => 'Campo obbligatorio',
    ];

    public function mount(Biography $biography)
    {
        $this->biography = $biography;
        $this->description = $biography->description;
        if ($biography->img_url) {
            $this->img_url = asset('/storage/' . $biography->img_url);
        }
    }

    public function submit()
    {
        $this->validate();

        $url = $this->biography->img_url;
        if ($this->img_url && !is_string($this->img_url)) {
            if ($this->biography->img_url) {
                Storage::disk('public')->delete($this->biography->img_url);
            }
            $url = $this->img_url->store('imgBio', 'public');
        }

        $this->biography->update([
            'description' => $this->description,
            'img_url' => $url,
        ]);

        session()->flash('message', 'Biografia modificata con successo!');

        return $this->redirect('/admin/biography-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.biography.edit-bio');
    }
}
