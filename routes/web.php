<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'hero']);
Route::get('About-Me', [PageController::class, 'About_Me']);
Route::get('My-Work', [PageController::class, 'My_Work']);
Route::get('My-Learning', [PageController::class, 'My_Learning']);
Route::get('Portfolio', [PageController::class, 'Portfolio']);
