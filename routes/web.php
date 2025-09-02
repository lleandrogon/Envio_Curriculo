<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ResumeController::class, 'index'])->name('index');
Route::post('/enviar', [ResumeController::class, 'store'])->name('store');
