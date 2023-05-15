<?php

namespace Database\Seeders;

use App\Models\Artiste;
use App\Models\Morceau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtisteMorceauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $morceaux = Morceau::all();
        $artistes = Artiste::all();

        foreach ($morceaux as $morceau) {
            $nb_artistes = rand(1, 3);
            $morceau_artistes = $artistes->random($nb_artistes);
            $morceau->artistes()->attach($morceau_artistes);
        }
    }
}
