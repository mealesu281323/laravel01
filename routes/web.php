<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
// CLONACIÓN para turno noche 

Route::get('/', [PagesController::class, 'fnIndex'])->name('xIndex');
Route::view('/detalle/{id}', [PagesController::class, 'fnEsDetalle']) -> name('Estudiante.xDetalle');
Route::view('/galeria', 'pagGaleria', ['valor' => 15]) -> name('xGaleria'); 
Route::view('/inicio', 'pagInicio', ['valor' => 15]) -> name('xInicio'); 

Route::get('/lista', function (){
    return view('pagLista');
}) -> name('xLista');

Route::get('/listaseguimiento', function (){
    return view('pagListaseguimiento');
}) -> name('xListaseguimiento');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*
Route::get('/', function () {
    return view('welcome');
}) -> name('xInicio');
*/