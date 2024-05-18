<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;


// Band routes
Route::get('/', [BandController::class, 'showBands'])->name('home');

Route::get('albums/{id}', [BandController::class, 'albumsView'])->name('albums.albums_view');


