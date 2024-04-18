<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ConferenceController;

Route::get( '/', static function () {
    return view('welcome');
});

//All conference
Route::get('/conferences', [ConferenceController::class, 'index'])->name('home.index');

//create conference
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('home.create')->middleware('auth');
Route::post('conferences/store', [ConferenceController::class, 'store'])->name('home.store');

//Single conference
Route::get('/conferences/{id}', [ConferenceController::class, 'show'])->name('home.show');

//delete conference
Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('home.destroy')->middleware('auth');

//update
Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('home.edit')->middleware('auth');
Route::put('/conferences/{id}', [ConferenceController::class, 'update'])->name('home.update')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::post('/logout', function () {
//    Auth::logout();
//    return redirect('/');
//})->name('logout');

