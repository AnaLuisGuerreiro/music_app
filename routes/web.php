<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;

// Band routes
Route::get('/', [BandController::class, 'showBands'])->name('home');
Route::get('/remove-band/{id}',[BandController::class, 'removeBand']) -> name('band.remove');
Route::get('/edit-band/{id}',[BandController::class, 'editBand']) -> name('band.edit');
Route::post('/update-band/{id}',[BandController::class, 'updateBand']) -> name('band.update');


Route::get('albums/{id}', [AlbumController::class, 'getAlbumsView'])->name('albums.albums_view');
Route::get('/band/{band_id}/edit-album/{album_id}', [AlbumController::class, 'editAlbum'])->name('albums.album_edit');
Route::post('/band/{band_id}/update-album/{album_id}', [AlbumController::class, 'updateAlbum'])->name('album.update');
Route::get('/remove-album/{id}/{band_id}', [AlbumController::class, 'removeAlbum'])->name('album.remove');




Route::post('register',[UserController::class, 'insertUser'])->name('user.register');
Route::post('logout',[UserController::class,'logout'])->name('logout');
Route::post('login', [UserController::class, 'login']);
