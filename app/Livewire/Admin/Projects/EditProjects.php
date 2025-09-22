<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProjects extends Component
{
    use WithFileUploads;

    public $project;
    public $img_url = null;
    public $title;
    public $description;
    public $url_git;
    public $url_web;
    public $is_available;

    protected $rules = [
        'title' => 'required|max:64',
        'description' => 'max:255',
        'img_url' => 'nullable',
    ];

    protected $messages = [
        'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo 64 cartteri',
        'description.max' => 'Massimo 255 cartteri',
    ];

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->title = $project->title;
        $this->url_git = $project->url_git;
        $this->url_web = $project->url_web;
        $this->description = $project->description;
        $this->is_available  = (bool) $project->is_available;

        if ($project->img_url) {
            $this->img_url = asset('/storage/' . $project->img_url);
        }
    }

    public function submit()
    {
        $this->validate();

        $url = $this->project->img_url;
        if ($this->img_url && !is_string($this->img_url)) {
            if ($this->project->img_url) {
                Storage::disk('public')->delete($this->project->img_url);
            }
            $url = $this->img_url->store('imgProj', 'public');
        }

        $this->project->update([
            'img_url' => $url,
            'title' => $this->title,
            'description' => $this->description,
            'url_git' => $this->url_git,
            'url_web' => $this->url_web,
            'is_available' => $this->is_available,
        ]);

        session()->flash('message', 'Progetto modificato con successo!');

        return $this->redirect('/admin/projects-home', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.projects.edit-projects');
    }
}
