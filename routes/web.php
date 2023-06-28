<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;


Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/', [PageController::class, 'aside'])->name('aside');
