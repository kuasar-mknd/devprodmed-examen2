<?php

namespace App\Http\Controllers;

use App\Models\Morceau;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        $morceaux = Morceau::paginate(10);


        return view('accueil', ['morceaux' => $morceaux]);
    }
}
