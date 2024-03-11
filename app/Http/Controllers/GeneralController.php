<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GeneralController extends Controller
{

    public function mostrarRural()
    {
    $lugaresRurales = Place::all();
    return Inertia::render('Rural', ['lugaresRurales' => $lugaresRurales]);
    }

    

    public function mostrarUrban()
    {
        $lugaresUrbanos = Place::all();
        return Inertia::render('Urban', ['lugaresUrbanos' => $lugaresUrbanos]);
    }
}
