<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JgimController;

Route::get('/', function () {
    return view('jgim');
});

Route::get('/jgim', [JgimController::class, 'index']);
Route::get('/maps-jgim', [JgimController::class, 'gotoslide']);
