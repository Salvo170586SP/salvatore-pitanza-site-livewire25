<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $documents = [
            ['name_doc' => 'Curriculum Vitae'],
            ['name_doc' => 'Cover Letter'],
            ['name_doc' => 'Certificati'],
            ['name_doc' => 'Portfolio'],
        ];

        foreach ($users as $user) {
            foreach ($documents as $document) {
                Document::create([
                    'user_id' => $user->id,
                    'name_doc' => $document['name_doc'],
                    'doc_url' => 'https://via.placeholder.com/600x800?text=' . urlencode($document['name_doc']),
                ]);
            }
        }
    }
}
