<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Morceau;
use App\Models\Genre;
use App\Models\Artiste;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Seed the genres table
       $this->call(GenreSeeder::class);

       // Seed the artistes table
       $this->call(ArtisteSeeder::class);

       // Seed the morceaux table
       $this->call(MorceauSeeder::class);

       // Seed the artiste_morceau pivot table
       $this->call(ArtisteMorceauSeeder::class);
    }
}
