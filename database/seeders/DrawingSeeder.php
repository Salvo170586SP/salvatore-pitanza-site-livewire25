<?php

namespace Database\Seeders;

use App\Models\Drawing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrawingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $drawings = [
            [
                'title' => 'Modern UI Design',
                'img_url' => 'https://via.placeholder.com/500x400?text=Drawing1',
                'url_instagram' => 'https://instagram.com/p/drawing1',
            ],
            [
                'title' => 'Digital Illustration',
                'img_url' => 'https://via.placeholder.com/500x400?text=Drawing2',
                'url_instagram' => 'https://instagram.com/p/drawing2',
            ],
            [
                'title' => 'Concept Art',
                'img_url' => 'https://via.placeholder.com/500x400?text=Drawing3',
                'url_instagram' => null,
            ],
        ];

        foreach ($users as $user) {
            foreach ($drawings as $drawing) {
                Drawing::create([
                    'user_id' => $user->id,
                    'title' => $drawing['title'],
                    'img_url' => $drawing['img_url'],
                    'url_instagram' => $drawing['url_instagram'],
                ]);
            }
        }
    }
}
