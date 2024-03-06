<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Places\StoreRequest;
use App\Models\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = place::all();

        return Inertia::render('Admin/Places/Index', compact('places'));
    }


    public function create()
    {
        return Inertia::render('Admin/Places/Create');
        
    }


    public function show(place $place)
    {
        return Inertia::render('Admin/Places/Show', compact('place'));
       
    }

    public function store(StoreRequest $request)
    {
        $data=$request->validated();
        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('places', 'public');
            $data['image']=asset('storage/'. $imagePath);
        }
        place::create($data); //con esto se guarda en la base de datos
        return redirect()->route('places.index')->with('success','lugar creado con exito');
    }

    public function edit(place $place)
    {
        return Inertia::render('Admin/Places/Edit', compact('place'));
       
    }

   
    public function update(StoreRequest $request, place $place)
    {
        $data=$request->validated();

        if($request->hasFile('image')){
            //eliminar imagen si existe
            if($place->image){
                Storage::delete($place->image);//para borrar la imagen del storage
            }
            $imagePath=$request->file('image')->store('places', 'public');
            $data['image']=asset('storage/'. $imagePath);
        }else{
            $data['image']=$place->image;
        }
        $place->update($data); //esto se actualiza en la base de datos
        return redirect()->route('places.index')->with('success','categoria editada con exito');
        
    }

    public function destroy(place $place)
    {
        $place->delete();
        return redirect()->route('places.index')->with('success','categoria eliminada con exito');
        
    }
}
