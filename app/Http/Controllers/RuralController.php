<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RuralController extends Controller
{
    public function mostrar()
    {
        return Inertia::render('Rural');
    }
}
