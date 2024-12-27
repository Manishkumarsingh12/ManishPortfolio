<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\email\EmailController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::post('/sendEmail', [EmailController::class, 'sendEmail'])->name('sendEmail');
Route::view('/try', 'try');
