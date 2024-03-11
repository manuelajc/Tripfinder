<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\StoreRequest;
use App\Models\Lenguage;
use App\Models\Place;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;
use PhpParser\Node\Stmt\Return_;

class ServiceController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lugares = Place::select('id','name')->get();
        $lenguages = Lenguage::select('id','name')->get();
        return Inertia::render('Translator/Create',compact('lugares','lenguages'));   

     }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data=$request->validated();
        
        $service = new Service();

        $service->description = $data['descripcion'];
        $service->tarifa = $data['rate'];
        $service->candidates = 0;
        $service->place_id = $data['lugar'];
        $service->lenguage_id = $data['idioma'];

        $service->save();

        return redirect()->route('vista.translator')->with('success','Lenguaje creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
