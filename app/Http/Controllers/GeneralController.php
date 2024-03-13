<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inscription;
use App\Models\place;
use App\Models\Service;
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

    public function showPlace(place $place) {
        $services = Service::where('place_id', $place->id)->with('lenguage:id,name')->get();
        return Inertia::render('Admin/Places/Show', compact('place', 'services'));
    }

    public function registerToService(Service $service) {
        
        $inscription = new Inscription();

        $inscription->service_id = $service->id;
        $inscription->user_id = auth()->user()->id;

        $inscription->save();

        $service->candidates = $service->candidates + 1;
        
        $service->update();

        $message = 'Registrado con exito!';

        return Inertia::render('Sucess', compact('message'));

    }
}
