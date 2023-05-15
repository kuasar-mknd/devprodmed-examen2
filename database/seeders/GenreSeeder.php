<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['Disco', 'Salsa', 'Jazz', 'Blues', 'Dance', 'Metal', 'Country', 'Rock', 'Reggae', 'Pop'];
        foreach ($genres as $genre) {
            Genre::create([
                'genre' => $genre,
            ]);
        }
    }
}
