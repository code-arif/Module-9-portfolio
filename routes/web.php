<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\servicesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'index'])->name('display.home');
Route::get('/about',[aboutController::class,'showAbout'])->name('show.about');
Route::get('/services',[servicesController::class,'showServices'])->name('show.services');
Route::get('/project',[projectController::class,'projectShow'])->name('show.project');
Route::get('contact',[contactController::class,'contactShow'])->name('show.contact');
