<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

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

Route::get('/', [PessoaController::class, 'index'])->name('home');
Route::get('/create', [PessoaController::class, 'create'])->name('create');
Route::post('/store', [PessoaController::class, 'store'])->name('store');
Route::get('/edit/{pessoa}', [PessoaController::class, 'edit'])->name('edit');
Route::put('/update/{pessoa}', [PessoaController::class, 'update'])->name('update');
Route::delete('/destroy/{pessoa}', [PessoaController::class, 'destroy'])->name('destroy');





