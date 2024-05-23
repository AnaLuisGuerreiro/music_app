<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;

// Band routes
Route::get('/home', [BandController::class, 'showBands'])->name('home');
Route::get('/remove-band/{id}',[BandController::class, 'removeBand']) -> name('band.remove');
Route::get('/edit-band/{id}',[BandController::class, 'editBand']) -> name('band.edit');
Route::post('/update-band/{id}',[BandController::class, 'updateBand']) -> name('band.update');


Route::get('albums/{id}', [AlbumController::class, 'getAlbumsView'])->name('albums.albums_view');

Route::get('create',[UserController::class, 'insertUser']);

Route::post('/logout',[UserController::class,'logout'])->name('logout');
Route::post('login', [UserController::class, 'login']);
