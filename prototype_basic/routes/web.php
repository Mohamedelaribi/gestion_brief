<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionApprenant;
use App\Http\Controllers\GestionBrief;
use App\Http\Controllers\GestionPromotion;
use App\Http\Controllers\GestionTask;

Route::get('/', function () {
    return view('promotions.promotion');
});

Route::resource('promotion', GestionPromotion::class);


Route::resource('brief', GestionBrief::class);



Route::get('brief/{id}/task/create', [GestionBrief::class, 'create'])->name('task_create');
Route::get('brief/task/{id}/edit', [GestionApprenants::class, 'edit'])->name('task_edit');
Route::post('brief/task/{id}/edit', [GestionApprenants::class, 'update'])->name('task_update');