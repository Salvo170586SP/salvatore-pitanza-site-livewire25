<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $projects = [
            [
                'title' => 'Portfolio Website',
                'description' => 'Un sito portfolio moderno creato con Laravel e Vue.js',
                'img_url' => 'https://via.placeholder.com/400x300?text=Portfolio',
                'url_git' => 'https://github.com/user/portfolio',
                'url_web' => 'https://portfolio.example.com',
                'is_available' => true,
            ],
            [
                'title' => 'E-commerce Platform',
                'description' => 'Piattaforma e-commerce con gestione prodotti e pagamenti',
                'img_url' => 'https://via.placeholder.com/400x300?text=Ecommerce',
                'url_git' => 'https://github.com/user/ecommerce',
                'url_web' => null,
                'is_available' => false,
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Applicazione per la gestione delle attività con timeline',
                'img_url' => 'https://via.placeholder.com/400x300?text=TaskApp',
                'url_git' => 'https://github.com/user/taskapp',
                'url_web' => 'https://tasks.example.com',
                'is_available' => true,
            ],
        ];

        foreach ($users as $user) {
            foreach ($projects as $project) {
                Project::create([
                    'user_id' => $user->id,
                    'title' => $project['title'],
                    'description' => $project['description'],
                    'img_url' => $project['img_url'],
                    'url_git' => $project['url_git'],
                    'url_web' => $project['url_web'],
                    'is_available' => $project['is_available'],
                ]);
            }
        }
    }
}
