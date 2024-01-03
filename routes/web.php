<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Artes\ArteController;
use App\Http\Controllers\Artistas\ArtistaController;
use App\Http\Livewire\Artes\IndexArtes;
use App\Http\Livewire\Artistas\IndexArtistas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Controller ApiController Geral (primeiro)
// Route::get('/artistas', [ApiController::class, 'artistas']);
// Route::get('/artes', [ApiController::class, 'artes']);

// Controller Artista
//Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas.index');
Route::get('/artistas/create', [ArtistaController::class, 'store']);
// Route::get('/artistas/{constituentID}', [ArtistaController::class, 'show'])->name('artistas.show');

// Controller Artes
// Route::get('/artes', [ArteController::class, 'index'])->name('artes.index');
Route::get('/artes/create', [ArteController::class, 'store']);
// Route::get('/artes/{objectID}', [ArteController::class, 'show'])->name('artes.show');

// Controller Artista Livewire
Route::get('/artistas', [IndexArtistas::class, 'render'])->name('artistas.index');
Route::get('/artistas/{constituentID}', [IndexArtistas::class, 'show'])->name('artistas.show');

// Controller Artes Livewire
Route::get('/artes', [IndexArtes::class, 'render'])->name('artes.index');
Route::get('/artes/{objectID}', [IndexArtes::class, 'show'])->name('artes.show');