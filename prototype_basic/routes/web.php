<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionApprenant;
use App\Http\Controllers\GestionBrief;
use App\Http\Controllers\GestionPromotion;
use App\Http\Controllers\GestionTask;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('promotions.promotion');
});

Route::resource('promotion', GestionPromotion::class);


Route::resource('brief', GestionBrief::class);

Route::get('/brief/{id}/edit', [GestionTask::class,'index']);


Route::resource('brief.task', GestionTask::class)->shallow();

