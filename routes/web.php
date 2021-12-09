<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'App\Http\Controllers\LoginController');

Route::resource('/mecanicos', 'App\Http\Controllers\HomeController');

Route::resource('/llanteras', 'App\Http\Controllers\LlanteraController');

Route::resource('/talleres', 'App\Http\Controllers\TallerController');