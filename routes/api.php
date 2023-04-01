<?php

use Illuminate\Support\Facades\Route;
use App\Interfaces\Controllers\Home\Client\HomePageController;

Route::get('/home', HomePageController::class)->name('home');
