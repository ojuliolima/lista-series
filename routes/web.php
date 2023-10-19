<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;


/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get(
    '/series', 
    [SeriesController::class, 'index']
)->name('lista-series');
Route::get(
    '/series/criar', 
    [SeriesController::class, 'create']
)->name('criar');

Route::post(
    '/series/salvar', 
    [SeriesController::class, 'store']
)->name('criar');//continuar daqui