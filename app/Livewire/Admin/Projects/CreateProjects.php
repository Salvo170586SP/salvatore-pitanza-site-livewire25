<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProjects extends Component
{
    use WithFileUploads;

    public $img_url = null;
    public string $title = '';
    public ?string $description = '';
    public ?string $url_git = '';
    public ?string $url_web = '';
    public bool $is_available = false;
    public array $selectedSkills = [];

    protected $rules = [
        'title' => 'required|max:64',
        'description' => 'max:255',
        'img_url' => 'nullable',
        'selectedSkills' => 'array',
        'selectedSkills.*' => 'exists:skills,id',
    ];

    protected $messages = [
        'title.required' => 'Campo obbligatorio',
        'title.max' => 'Massimo 64 cartteri',
        'description.max' => 'Massimo 255 cartteri',
    ];

    public function submit()
    {
        $this->validate();

        $url = $this->img_url;

        if ($this->img_url) {
            $url = $this->img_url->store('imgProj', 'public');
        }

        $project =  Project::create([
            'user_id' => Auth::id(),
            'img_url' => $url,
            'title' => $this->title,
            'description' => $this->description,
            'url_git' => $this->url_git,
            'url_web' => $this->url_web,
            'is_available' => $this->is_available,
        ]);

        $project->skills()->attach($this->selectedSkills);

        session()->flash('message', 'Projetto creato con successo!');

        return $this->redirect('/admin/projects-home', navigate: true);
    }

    public function render()
    {
        $skills = Skill::all();
        return view('livewire.admin.projects.create-projects', compact('skills'));
    }
}
