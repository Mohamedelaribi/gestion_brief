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

// Route::get('brief/{id}/task', [GestionTask::class,'create'])->name('createTask');
// Route::get('brief/task/{id}/edit', [GestionTask::class,'edit'])->name('editTask');
// Route::post('brief/task/{id}/edit', [GestionTask::class,'update'])->name('updateTask');