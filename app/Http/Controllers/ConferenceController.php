<?php

namespace App\Http\Controllers;
use App\Models\Conference;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConferenceRequest;

class ConferenceController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'heading' => 'LIST OF CONFERENCE',
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

    public function store(StoreConferenceRequest $request, Conference $conference)
    {
        $validated=$request->validated();
        $conference->title = $validated['title'];
        $conference->place = $validated['place'];
        $conference->description = $validated['description'];
        $date = $request->input('year') . '-' . $request->input('month') . '-' . $request->input('day');
        $conference->date = $date;

        $conference->save();

        return redirect('/')->with('msg', 'Conference was created successfully');
    }

    public function destroy($id)
    {
        $conferences = Conference::findOrFail($id);
        $conferences->delete();

        return redirect('/conferences');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('home.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        // Retrieve the conference
        $conference = Conference::findOrFail($id);

        // Update conference details
        $conference->title = $request->input('title');
        $conference->place = $request->input('place');
        $conference->description = $request->input('description');
        $conference->date = $request->input('date');
        $conference->save();

        // Redirect back with success message
        return redirect('/conferences');
    }

}
