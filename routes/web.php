<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('intro');
});

Route::get('/pessoas', [App\Http\Controllers\PessoaController::class, 'index'])->name('pessoas.index');
Route::get('/pessoas/create', [App\Http\Controllers\PessoaController::class, 'create'])->name('pessoas.create');
Route::post('/pessoas', [App\Http\Controllers\PessoaController::class, 'store'])->name('pessoas.store');
Route::get('/delete/{id}', [App\Http\Controllers\PessoaController::class, 'delete'])->name('pessoas.delete');
Route::get('/edit/{id}', [App\Http\Controllers\PessoaController::class, 'edit'])->name('pessoas.edit');
Route::put('/update', [App\Http\Controllers\PessoaController::class, 'update'])->name('pessoas.update');
Route::get('/search', [App\Http\Controllers\PessoaController::class, 'search'])->name('pessoas.search');

Route::get('/contatos/create/{id}', [App\Http\Controllers\ContatosController::class, 'create'])->name('contatos.create');
Route::get('/contatos/{id}', [App\Http\Controllers\ContatosController::class, 'index'])->name('contatos.index');
Route::post('/contatos', [App\Http\Controllers\ContatosController::class, 'store'])->name('contatos.store');    
Route::get('/deleteContato/{id}', [App\Http\Controllers\ContatosController::class, 'delete'])->name('contatos.delete');
Route::get('/editContato/{id_contato}', [App\Http\Controllers\ContatosController::class, 'edit'])->name('contatos.edit');