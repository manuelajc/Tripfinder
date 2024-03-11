<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TranslatorController extends Controller
{
    public function vistaTranslator()
    {
        // Lógica para mostrar la vista del traductor
        $services = Service::with('lenguage:id,name', 'place:id,name')->get();
        return Inertia::render('Translator/Dashboard', compact('services'));
    }
}