<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Lenguage\StoreRequest;
use App\Models\Lenguage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LenguageController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lenguages = Lenguage::all();
        return Inertia::render('Admin/Lenguages/Index', compact('lenguages'));
    }


    public function create()
    {
        return Inertia::render('Admin/Lenguages/Create');
        
    }


    public function show(Lenguage $lenguage)
    {
        return Inertia::render('Admin/Lenguages/Show', compact('lenguage'));
       
    }

    public function store(StoreRequest $request)
    {
        $data=$request->validated();
        Lenguage::create($data); //con esto se guarda en la base de datos
        return redirect()->route('lenguages.index')->with('success','Lenguaje creado con exito');
    }

    public function edit(Lenguage $lenguage)
    {
        return Inertia::render('Admin/Lenguages/Edit', compact('lenguage'));
       
    }

   
    public function update(StoreRequest $request, Lenguage $lenguage)
    {
        $data=$request->validated();
        $lenguage->update($data); //esto se actualiza en la base de datos
        return redirect()->route('lenguages.index')->with('success','Lenguaje editada con exito');
        
    }

    public function destroy(Lenguage $lenguage)
    {
        $lenguage->delete();
        return redirect()->route('lenguages.index')->with('success','Lenguaje eliminada con exito');
    }
}
