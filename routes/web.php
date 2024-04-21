<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('apply', [ApplicationController::class, 'store'])->name('applications.store');
Route::post('applications/media', [ApplicationController::class, 'storeMedia'])->name('applications.storeMedia');
