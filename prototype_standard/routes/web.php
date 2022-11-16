<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionApprenant;
use App\Http\Controllers\GestionBrief;
use App\Http\Controllers\GestionPromotion;
use App\Http\Controllers\GestionTask;
use App\Http\Controllers\AssingerBrief;




Route::get('/', function () {
    return view('layout');
});

Route::resource('promotion', GestionPromotion::class);

Route::resource('promotion.apprenant', GestionApprenant::class)->shallow();

Route::resource('brief', GestionBrief::class);

Route::resource('brief.assignbrief', AssingerBrief::class)->shallow();

Route::resource('brief.task', GestionTask::class)->shallow();

