<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $jsonData = json_encode([
            'time' => 1630027132437,
            'blocks' => [
                [
                    'type' => 'paragraph',
                    'data' => [
                        'text' => 'Ceci est un exemple de texte avec Editor.js.'
                    ]
                ]
            ],
            'version' => '2.23.2'
        ]);

        Blog::create([
            'title' => 'Les aventures de Marcelin le pirate!',
            'content' => $jsonData,
            'user_id' => 11,
        ]);
    }
}
