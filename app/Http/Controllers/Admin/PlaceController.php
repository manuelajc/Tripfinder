<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\place;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = place::all();

        return Inertia::render('Admin/Places', [
            'places' => $places,
        ]);
    }


    public function create()
    {
        return Inertia::render('Admin/Placesmanager');
    }


    public function show(string $id)
    {
        $place = place::first($id);
    }

    public function edit(string $id)
    {
        
    }

   
    public function update(Request $request, string $id)
    {

        
    }

    public function destroy(string $id)
    {
        
        
    }
}
