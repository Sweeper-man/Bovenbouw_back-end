<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\WelcomeController;
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

// Route::get("/hello", [Welcome::class, "hello"]);

Route::get("/songs", [SongController::class, "index"]);

Route::get("/song/create", [SongController::class, "create"]);
Route::post("/song/store", [SongController::class, "store"]);

Route::get("/genre/all", [GenreController::class, "index"]);
Route::get("/genre/create", [GenreController::class, "create"]);
Route::post("genre/store", [GenreController::class, "store"]);

Route::get("/playlist", [PlaylistController::class, "index"]);
Route::get("/playlist/create", [PlaylistController::class, "create"]);
Route::post("playlist/store", [PlaylistController::class, "store"]);

Route::get("/artist", [ArtistController::class, "index"]);

Route::get("/home", [WelcomeController::class, "welcome"]);