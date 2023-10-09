<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('intro');
});

Route::get('/people', [App\Http\Controllers\PessoaController::class, 'index'])->name('people.index');
Route::get('/people/create', [App\Http\Controllers\PessoaController::class, 'create'])->name('people.create');
Route::post('/people', [App\Http\Controllers\PessoaController::class, 'store'])->name('people.store');
Route::get('/delete/{id}', [App\Http\Controllers\PessoaController::class, 'delete'])->name('people.delete');
Route::get('/update/{id}', [App\Http\Controllers\PessoaController::class, 'update'])->name('people.update');
Route::put('/update', [App\Http\Controllers\PessoaController::class, 'update'])->name('people.update');
Route::get('/search', [App\Http\Controllers\PessoaController::class, 'search'])->name('people.search');

Route::get('/contact/create/{id}', [App\Http\Controllers\contactController::class, 'create'])->name('contact.create');
Route::get('/contact/{id}', [App\Http\Controllers\contactController::class, 'index'])->name('contact.index');
Route::post('/contact', [App\Http\Controllers\contactController::class, 'store'])->name('contact.store');    
Route::get('/deletecontact/{id}', [App\Http\Controllers\contactController::class, 'delete'])->name('contact.delete');
Route::get('/updatecontact/{id_contact}', [App\Http\Controllers\contactController::class, 'update'])->name('contact.update');