<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Morceau>
 */
class MorceauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $titres = Storage::get('liste_titres.txt');
        $titres = explode("\n", $titres);
        $titres = array_map('trim', $titres);
        $titres = array_filter($titres);

        $duree = 180 + (rand(0, 90) * 1.5);// génère un nombre aléatoire entre 180 et 270 (3 et 4.5 minutes en secondes)
        $minutes = floor($duree / 60); // calcule le nombre de minutes
        $secondes = $duree % 60; // calcule le nombre de secondes restantes
        $duree = sprintf('%d:%02d', $minutes, $secondes); // formatte la durée en minutes:secondes

        $genres = Genre::all();

        return [
            'titre' => $titres[array_rand($titres)],
            'duree' => $duree,
            'genre_id' => $genres->random()->id,
        ];
    }
}
