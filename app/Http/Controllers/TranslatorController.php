<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    public function vistaTranslator()
    {
        // Lógica para mostrar la vista del traductor
        return view('translator.vista');
    }
}