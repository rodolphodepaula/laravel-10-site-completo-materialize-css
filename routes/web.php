<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\SendMailController;
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
Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/servicos', [NavigationController::class, 'servicos'])->name('servicos');
Route::get('/galeria', [NavigationController::class, 'galeria'])->name('galeria');
Route::get('/contato', [NavigationController::class, 'contato'])->name('contato');

Route::post('/', [SendMailController::class, 'lead'])->name('lead');
Route::post('/contato', [SendMailController::class, 'contato'])->name('novocontato');