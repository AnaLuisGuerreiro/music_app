<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'homePage'])->name('home');

