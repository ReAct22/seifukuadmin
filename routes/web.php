<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\GalleryController;

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

Route::get('/', [DashboardContoller::class, 'index'])->name('admin');

// Genre
Route::resource('genre', GenreController::class);
// Anime
Route::resource('anime', AnimeController::class);
// Gallery
Route::resource('gallery', GalleryController::class);
