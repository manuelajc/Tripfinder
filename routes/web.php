<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\ProfileController;
use App\Models\Place;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return Inertia::render('Admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::get('categories/index', [CategoryController::class, 'index'])->name('admin.categories');

/* Route::get('places/index', [PlaceController::class, 'index'])->name('admin.places');
Route::get('places/create', [PlaceController::class, 'create'])->name('admin.places.create');
Route::post('places/store', [PlaceController::class, 'store'])->name('admin.places.store');
Route::get('places/edit/{id}', [PlaceController::class, 'edit'])->name('admin.places.edit');
Route::put('places/update/{id}', [PlaceController::class, 'update'])->name('admin.places.update');
Route::delete('places/delet/{id}', [PlaceController::class, 'delete'])->name('admin.places.delete'); */

Route::resource('admin/places', PlaceController::class)->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
