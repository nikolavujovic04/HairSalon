<?php

use App\Http\Controllers\ContantController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/about', [PagesController::class,'about'])->name('about');
Route::get('/admin', [PagesController::class,'admin'])->name('admin');
Route::get('/contact', [PagesController::class,'contact'])->name('contact');
Route::post('/contact', [ContantController::class,'sendEmail'])->name('contact.send');
Route::get('/reservation', [PagesController::class,'reservation'])->name('reservation');
Route::get('/reservation',[ServicesController::class,'index'])->name('serviceReservation');