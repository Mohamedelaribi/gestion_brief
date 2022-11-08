<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GestionPromotion;
use App\Http\Controllers\GestionApprenants;


Route::get('/promotion', function(){
    return view('home');
});
Route::resource('promotion', GestionPromotion::class);
// Route::get('promotion/{id}', [GestionPromotion::class, 'destroy'])->name('deletePromotion');

Route::get('search/{name}',[GestionPromotion::class,'search']);

Route::get('search',[GestionPromotion::class,'search']);


Route::get('promotion/apprenant/{id}', [GestionApprenants::class, 'create'])->name('apprenant_create');
// Route::get('promotion/{id}/edit', [UserController::class, 'index'])->name('user.index');
// gestion apprenants route
Route::get('promotion/{id}/apprenant/create', [GestionApprenants::class, 'create'])->name('apprenant_create');
Route::get('promotion/apprenant/{id}/edit', [GestionApprenants::class, 'edit'])->name('apprenant_edit');
Route::post('promotion/apprenant/{id}/edit', [GestionApprenants::class, 'update'])->name('apprenant_update');

Route::resource('apprenant', GestionApprenants::class);



