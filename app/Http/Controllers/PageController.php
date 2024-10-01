<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function homepage()
    {
        // Recupera tutti i treni dal database
        $trains = Train::all();

        // Ritorna la vista 'home' passando i treni recuperati
        return view('home', compact('trains'));
    }
}
