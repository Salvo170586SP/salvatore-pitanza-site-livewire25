<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $skills = [
            ['name' => 'Laravel', 'url_icon' => 'https://via.placeholder.com/50x50?text=Laravel'],
            ['name' => 'Vue.js', 'url_icon' => 'https://via.placeholder.com/50x50?text=Vue'],
            ['name' => 'PHP', 'url_icon' => 'https://via.placeholder.com/50x50?text=PHP'],
            ['name' => 'JavaScript', 'url_icon' => 'https://via.placeholder.com/50x50?text=JS'],
            ['name' => 'MySQL', 'url_icon' => 'https://via.placeholder.com/50x50?text=MySQL'],
            ['name' => 'Tailwind CSS', 'url_icon' => 'https://via.placeholder.com/50x50?text=Tailwind'],
            ['name' => 'Docker', 'url_icon' => 'https://via.placeholder.com/50x50?text=Docker'],
            ['name' => 'Git', 'url_icon' => 'https://via.placeholder.com/50x50?text=Git'],
        ];

        foreach ($users as $user) {
            foreach ($skills as $skill) {
                Skill::create([
                    'user_id' => $user->id,
                    'name' => $skill['name'],
                    'url_icon' => $skill['url_icon'],
                ]);
            }
        }
    }
}
