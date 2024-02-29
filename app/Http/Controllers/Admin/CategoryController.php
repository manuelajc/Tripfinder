<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();

        return Inertia::render('Admin/Category', [
            'categories' => $categories,
        ]);

        
    }


    public function create()
    {
        
    }


    public function show(string $id)
    {
        
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
