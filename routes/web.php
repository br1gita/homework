<?php

use Illuminate\Support\Facades\Route;
use App\Models\Conference;

//All conference
Route::get('/', function () {
    return view('welcome', [
        'heading' => 'Latest conferences',
        'conferences' => Conference::all()
    ]);
});

//Single conference
Route::get('/conferences/{id}', function ($id){
    return view('conferences', [
        'conference' => Conference::find($id)
    ]);
});



