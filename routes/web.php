<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ArteController;
use App\Http\Controllers\ArtistaController;
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
Route::get('/artistas-index', [ArtistaController::class, 'index']);
Route::get('/artistas-create', [ArtistaController::class, 'store']);
Route::get('/artistas-find', [ArtistaController::class, 'show']);

// Controller Artes
Route::get('/artes-index', [ArteController::class, 'index']);
Route::get('/artes-create', [ArteController::class, 'store']);
Route::get('/artes-find', [ArteController::class, 'show']);