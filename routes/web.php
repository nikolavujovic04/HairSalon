<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/about', [PagesController::class,'about'])->name('about');
Route::get('/admin', [PagesController::class,'admin'])->name('admin');
