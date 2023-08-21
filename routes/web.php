<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SavesController;
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

//movies
Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movie/{movie}', [MoviesController::class, 'show'])->name('movies.show');
Route::get('/searchMovies', [MoviesController::class, 'search'])->name('movies.search');

Route::get('/categoryFilter/{category}', [MoviesController::class, 'categoryFilter'])->name('movies.categoryFilter');

// saves
Route::get('/saves', [SavesController::class, 'index'])->name('saves.index');
Route::get('/saves/get', [SavesController::class, 'getSaves'])->name('saves.get');

Route::get('/save/create/{movie}', [SavesController::class, 'create'])->name('saves.create');
Route::post('/save/store', [SavesController::class, 'store'])->name('saves.store');

// Route::get('/save/edit/{save}', [SavesController::class, 'edit'])->name('saves.edit');
Route::put('/save/update', [SavesController::class, 'update'])->name('saves.update');
Route::delete('/save/destroy', [SavesController::class, 'destroy'])->name('saves.destroy');

