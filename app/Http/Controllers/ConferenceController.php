<?php

namespace App\Http\Controllers;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'heading' => 'List of conferences',
            //'conferences' => Conference::orderBy('date')->get()
            //'conferences' => Conference::latest()->get()
            'conferences' => Conference::all()
        ]);
    }

    public function show($id)
    {
        return view('home.show', [
            'conference' => Conference::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('home.create');
    }
}
