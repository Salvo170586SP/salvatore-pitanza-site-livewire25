<?php

namespace Database\Seeders;

use App\Models\Biography;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Biography::create([
                'user_id' => $user->id,
                'description' => 'Sono uno sviluppatore appassionato con esperienza in Laravel e Vue.js. Amo creare applicazioni web innovative e scalabili.',
                'img_url' => 'https://via.placeholder.com/300x300?text=Bio+' . $user->id,
            ]);
        }
    }
}
