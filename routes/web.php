<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExemploController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo', [ExemploController::class, 'index']);

Route::get('/aluno', [AlunoController::class, 'index']);
Route::get('/updatealuno', [AlunoController::class, 'update']);

Route::get('/biblioteca', [BibliotecaController::class, 'index']);
Route::get('/updatebiblioteca', [BibliotecaController::class, 'update']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/updatepost', [PostController::class, 'update']);

Route::get('/contato', [ContactController::class, 'index']);
Route::post('/contato/store', [ContactController::class, 'store'])->name('contato.store');

Route::put('/contato/update', [ContactController::class, 'update'])->name('contato.update');

Route::delete('/contato/delete/{id}', [ContactController::class, 'destroy'])->name('contato.destroy');
