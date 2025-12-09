<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $experiences = [
            [
                'title' => 'Senior Full-Stack Developer',
                'description' => 'Sviluppatore senior presso TechCorp con 5+ anni di esperienza in Laravel e Vue.js. Ho guidato un team di 3 sviluppatori nella creazione di applicazioni mission-critical.',
            ],
            [
                'title' => 'Full-Stack Developer',
                'description' => 'Sviluppatore full-stack presso WebAgency con 3 anni di esperienza. Ho contribuito allo sviluppo di siti e applicazioni web per clienti enterprise.',
            ],
            [
                'title' => 'Junior Developer',
                'description' => 'Primo ruolo come junior developer presso StartupXYZ dove ho imparato i fondamenti dello sviluppo web e le best practices del codice.',
            ],
        ];

        foreach ($users as $user) {
            foreach ($experiences as $experience) {
                Experience::create([
                    'user_id' => $user->id,
                    'title' => $experience['title'],
                    'description' => $experience['description'],
                ]);
            }
        }
    }
}
