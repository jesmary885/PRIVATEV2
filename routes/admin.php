<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','IsAdmin'])->group(function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home_admin');



});