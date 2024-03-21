<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LenguageController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PlaceController as ControllersPlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TranslatorController;
use App\Models\place;
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
    $lugares = place::orderBy('created_at', 'desc')->take(6)->get();
    return Inertia::render('Dashboard', compact('lugares'));
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
Route::get('place/{place}', [GeneralController::class, 'showPlace'])->name('place.show.view');

Route::resource('admin/places', PlaceController::class)->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';

Route::get('tras', function(){
    return "ingreso correctamente";

});

Route::middleware(['auth.custom'])->group(function () {
    // Tus rutas que requieren autenticación
    Route::get('/admin/places', 'Admin\PlaceController@index')->name('admin.places.index');
    // ...
});
//->middleware('traductor');


Route::get('/translator', [TranslatorController::class, 'vistaTranslator'])->name('vista.translator')->middleware(['auth', 'translator']);
Route::get('/cadidates/{service}', [TranslatorController::class, 'showCandidates'])->name('candidates.show');


Route::resource('admin/places', PlaceController::class)->middleware(['auth', 'admin']);

Route::get('/urban', [GeneralController::class, 'mostrarUrban'])->name('Urban');
Route::get('/rural', [GeneralController::class, 'mostrarRural'])->name('Rural');

Route::post('/register/{service}', [GeneralController::class, 'registerToService'])->name('register.service')->middleware(['auth']);
Route::resource('admin/lenguages', LenguageController::class)->middleware('admin');
Route::resource('/traductor/services', ServiceController::class)->middleware(['auth', 'translator']);


