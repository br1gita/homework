<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ConferenceController;

Route::get( '/', static function () {
    return view('welcome');
});

//All conference
Route::get('/conferences', [ConferenceController::class, 'index']);

//create conference
Route::get('/conferences/create', [ConferenceController::class, 'create']);

//Single conference
Route::get('/conferences/{id}', [ConferenceController::class, 'show']);



