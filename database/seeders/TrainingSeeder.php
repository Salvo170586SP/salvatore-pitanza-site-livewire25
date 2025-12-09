<?php

namespace Database\Seeders;

use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $trainings = [
            [
                'icon' => '🎓',
                'title' => 'Laravel Certification',
                'subtitle' => 'Expert Level',
                'description' => 'Certificazione completa in Laravel con focus su design patterns e best practices.',
            ],
            [
                'icon' => '💻',
                'title' => 'Vue.js Masterclass',
                'subtitle' => 'Advanced',
                'description' => 'Corso avanzato di Vue.js con Composition API e gestione dello stato.',
            ],
            [
                'icon' => '🚀',
                'title' => 'Web Performance',
                'subtitle' => 'Optimization',
                'description' => 'Ottimizzazione delle prestazioni web e best practices di frontend.',
            ],
        ];

        foreach ($users as $user) {
            foreach ($trainings as $training) {
                Training::create([
                    'user_id' => $user->id,
                    'icon' => $training['icon'],
                    'title' => $training['title'],
                    'subtitle' => $training['subtitle'],
                    'description' => $training['description'],
                ]);
            }
        }
    }
}
