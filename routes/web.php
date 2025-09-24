<?php

use App\Livewire\Admin\Biography\CreateBio;
use App\Livewire\Admin\Biography\EditBio;
use App\Livewire\Admin\Biography\IndexBio;
use App\Livewire\Admin\Experiences\CreateExperiences;
use App\Livewire\Admin\Experiences\EditExperiences;
use App\Livewire\Admin\Experiences\IndexExperiences;
use App\Livewire\Admin\Projects\CreateProjects;
use App\Livewire\Admin\Projects\EditProjects;
use App\Livewire\Admin\Projects\IndexProjects;
use App\Livewire\Admin\Skills\CreateDescriptionSkills;
use App\Livewire\Admin\Skills\CreateDocuments;
use App\Livewire\Admin\Skills\CreateGeneralDescription;
use App\Livewire\Admin\Skills\CreateSkills;
use App\Livewire\Admin\Skills\EditGeneralDescription;
use App\Livewire\Admin\Skills\EditSkills;
use App\Livewire\Admin\Skills\IndexSkills;
use App\Livewire\Admin\Trainings\TrainingsCreate;
use App\Livewire\Admin\Trainings\TrainingsEdit;
use App\Livewire\Admin\Trainings\TrainingsIndex;
use App\Livewire\Guest\Pages\AboutMe as PagesAboutMe;
use App\Livewire\Guest\Pages\HomePage;
use App\Livewire\Guest\Pages\ProjectsPage;
use App\Livewire\Guest\Pages\SkillsPage;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', HomePage::class);
Route::get('/about-me', PagesAboutMe::class);
Route::get('/skills', SkillsPage::class);
Route::get('/projects', ProjectsPage::class);

Route::view('dashboard', 'dashboard')
->middleware(['auth', 'verified'])
->name('dashboard');


Route::middleware(['auth'])->group(function () {
    //biography
    Route::get('/admin/biography-home', IndexBio::class)->name('biograpyIndex');
    Route::get('/admin/biography-home/created', CreateBio::class)->name('biograpyCreated');
    Route::get('/admin/biography-home/{biography}/edit', EditBio::class)->name('biograpyEdit');
   
    //trainings
    Route::get('/admin/trainings-home', TrainingsIndex::class)->name('trainingsIndex');
    Route::get('/admin/trainings-home/created', TrainingsCreate::class)->name('trainingsCreated');
    Route::get('/admin/trainings-home/{training}/edit', TrainingsEdit::class)->name('trainingsEdit');
   
    //projects
    Route::get('/admin/projects-home', IndexProjects::class)->name('projectsIndex');
    Route::get('/admin/projects-home/created', CreateProjects::class)->name('projectsCreated');
    Route::get('/admin/projects-home/{project}/edit', EditProjects::class)->name('projectsEdit');
   
    //experiences
    Route::get('/admin/experiences-home', IndexExperiences::class)->name('experiencesIndex');
    Route::get('/admin/experiences-home/created', CreateExperiences::class)->name('experiencesCreated');
    Route::get('/admin/experiences-home/{experience}/edit', EditExperiences::class)->name('experiencesEdit');
  
    //skills
    Route::get('/admin/skills-home', IndexSkills::class)->name('skillsIndex');
    Route::get('/admin/skills-home/created', CreateSkills::class)->name('skillsCreated');
    Route::get('/admin/skills-home/{skill}/edit', EditSkills::class)->name('skillsEdit');
    Route::get('/admin/skills-home/create-general-description', CreateGeneralDescription::class)->name('skillsCreateGeneralDescription');
    Route::get('/admin/skills-home/{skillInfo}/edit-general-description', EditGeneralDescription::class)->name('skillsEditGeneralDescription');
 
    Route::redirect('/admin/settings', 'settings/profile');

    Volt::route('/admin/settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('/admin/settings/password', 'settings.password')->name('password.edit');
    Volt::route('/admin/settings/appearance', 'settings.appearance')->name('appearance.edit');
});

require __DIR__ . '/auth.php';
