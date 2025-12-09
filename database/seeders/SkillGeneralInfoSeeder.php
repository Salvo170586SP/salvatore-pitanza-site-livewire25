<?php

namespace Database\Seeders;

use App\Models\SkillGeneralInfo;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillGeneralInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            SkillGeneralInfo::create([
                'user_id' => $user->id,
                'general_description' => 'Le mie competenze tecniche spaziano dal backend (PHP/Laravel) al frontend (Vue.js/JavaScript). Sono specializzato in architetture scalabili e nella creazione di applicazioni web performanti.',
            ]);
        }
    }
}
