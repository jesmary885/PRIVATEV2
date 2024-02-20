<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\CreadoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

        Route::get('/', function () {
            return view('auth.login');
        })->name('inicio');


        Route::post('log', [LoginController::class, 'authenticate'])->name('log');

        Route::get('/registro', [RegisterController::class, 'index'])->name('Registro');
        Route::post('/registro', [RegisterController::class, 'create'])->name('Registro_create');

        Route::middleware(['auth'])->group(function()
        {
    
            Route::get('/home', HomeController::class)->name('home');

            Route::get('search', SearchController::class)->name('search');

            Route::get('profile_user', [ProfileController::class,'index'])->name('profile_user');

        // Route::get('configurations', [ConfiguracionController::class,'index'])->name('configuracion');
            Route::get('configurations/account', [ConfiguracionController::class,'cuenta'])->name('configuracion_cuenta');
            Route::get('configurations/privacy', [ConfiguracionController::class,'privacidad'])->name('configuracion_privacidad');
            Route::get('configurations/payments', [ConfiguracionController::class,'pagos'])->name('configuracion_pagos');
            Route::get('configurations/solicitudes', [ConfiguracionController::class,'solicitudes'])->name('solicitudes');

            Route::get('creadores', [CreadoresController::class,'index'])->name('creadores.index');
            Route::get('creadores/{creator}', [CreadoresController::class,'select'])->name('creadores_select.index');

            Route::post('user/file',[ProfileController::class,'file'])->name('profile_user.photo');
        

            Route::get('Add_public', [ProfileController::class,'add_public'])->name('profile_user.add_public');

            Route::get('Mod_Image', [ProfileController::class,'mod_image'])->name('profile_user.Mod_image');

            Route::get('profile_user/edit_banner', [ProfileController::class, 'index_edit_image']);
            Route::post('crop-image-upload-ajax', [ProfileController::class, 'cropImageUploadAjax']);
            Route::post('crop-image-publicacion', [ProfileController::class, 'cropImagePublicacion']);

            ///HACERSE CREADOR

            Route::get('start_creator', [CreadoresController::class,'start_index'])->name('creadores.start_index');
            Route::get('start_creator/form', [CreadoresController::class,'start_form'])->name('creadores.form');
            Route::get('start_creator/info', [CreadoresController::class,'informacion'])->name('creadores.informacion');


            //CHAT

            Route::get('chat-conver/{contact?}',[ChatController::class,'index'])->name('chat.index');
            Route::get('chat-conver/{user}',[ChatController::class,'chat_convers'])->name('chat.convers');
        });




