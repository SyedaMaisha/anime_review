<?php

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

Route::get('/', function () {
    return redirect('/animes');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('animes', App\Http\Controllers\AnimeController::class);
Route::resource('characters' , App\Http\Controllers\CharacterController::class);
Route::resource('animes.reviews' , App\Http\Controllers\ReviewController::class)->shallow();

Route::post('/animes/{anime:id}/character_store', [AnimeController::class, 'anime_character_store'])->name('anime_character_store');
Route::delete('/animes/{anime:id}/characters/{character:id}' , [AnimeController::class, 'anime_character_destroy'])->name('anime_character_destroy');