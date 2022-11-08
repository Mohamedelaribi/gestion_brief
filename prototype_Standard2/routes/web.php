<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GestionPromotion;



Route::resource('test', GestionPromotion::class);