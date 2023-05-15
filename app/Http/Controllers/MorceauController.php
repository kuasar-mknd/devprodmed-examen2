<?php

namespace App\Http\Controllers;

use App\Models\Morceau;
use Illuminate\Http\Request;

class MorceauController extends Controller
{
    public function morceauxParLettre($lettre)
{
    $morceaux = Morceau::where('titre', 'like', $lettre . '%')->with('genre')->get();

    $morceaux = $morceaux->map(function ($morceau) {
        return [
            'titre' => $morceau->titre,
            'duree' => $morceau->duree,
            'genre' => $morceau->genre->genre,
        ];
    });

    return response()->json($morceaux);
}
}
