<?php

use App\Livewire\Admin\Biography\CreateBio;
use App\Livewire\Admin\Biography\EditBio;
use App\Livewire\Admin\Biography\IndexBio;
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
    Route::get('/admin/biography-home', IndexBio::class)->name('biograpyIndex');
    Route::get('/admin/biography-home/created', CreateBio::class)->name('biograpyCreated');
    Route::get('/admin/biography-home/{biography}/edit', EditBio::class)->name('biograpyEdit');
   
    Route::get('/admin/trainings-home', TrainingsIndex::class)->name('trainingsIndex');
    Route::get('/admin/trainings-home/created', TrainingsCreate::class)->name('trainingsCreated');
    Route::get('/admin/trainings-home/{training}/edit', TrainingsEdit::class)->name('trainingsEdit');

    Route::redirect('/admin/settings', 'settings/profile');

    Volt::route('/admin/settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('/admin/settings/password', 'settings.password')->name('password.edit');
    Volt::route('/admin/settings/appearance', 'settings.appearance')->name('appearance.edit');
});

require __DIR__ . '/auth.php';
