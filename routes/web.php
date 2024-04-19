<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('uploads', [UploadController::class, 'store'])->name('cover_letters.store');
Route::post('apply', [ApplicationController::class, 'store'])->name('applications.store');
