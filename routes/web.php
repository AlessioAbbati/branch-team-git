<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;


Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/aside', [PageController::class, 'aside'])->name('aside');
