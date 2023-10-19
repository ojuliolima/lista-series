<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return redirect('/series');
});

Route::controller(SeriesController::class)->group(function() {
    Route::get('/series', 'index')->name('serie.index');
    Route::get('/series/criar', 'create')->name('serie.create');
    Route::post('/series', 'store')->name('serie.store');
});
