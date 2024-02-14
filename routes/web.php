<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

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

// Route per visualizzare l'elenco dei film
Route::get('/', [PageController::class, 'index'])->name('movies.index');

// Route per visualizzare i dettagli di un singolo film
Route::get('/{id}', [PageController::class, 'show'])->name('movies.show');
