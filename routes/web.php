<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;


// Band routes
Route::get('/', [BandController::class, 'showBands'])->name('home');
Route::get('albums/{id}', [BandController::class, 'getAlbumsView'])->name('albums.albums_view');
Route::get('/remove-band/{id}',[BandController::class, 'removeBand']) -> name('band.remove');
Route::get('/edit-band/{id}',[BandController::class, 'editBand']) -> name('band.edit');
Route::post('/update-band/{id}',[BandController::class, 'updateBand']) -> name('band.update');


