<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;


Route::get('/', [BandController::class, 'showBands'])->name('home');

