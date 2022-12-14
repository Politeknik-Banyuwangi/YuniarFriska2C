<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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
    return view('index');
});

Route::get('/movie',[MovieController::class, 'index'])->name('movie.index');
// Route::get('/movie', 'App\Http\Controllers\MovieController@index');
Route::get('/movie/{movie}', [MovieController::class, 'show'])->name('movie.show');