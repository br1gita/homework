@extends('layouts.app')

@section('content')
    <div>
        <h1>Edit Conference</h1>
        <form action="/conferences/{{$conference->id}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Conference Name:</label>
                <input type="text" id="title" name="title" value="{{ $conference->title }}">
            </div>
            <div>
                <label for="place">Place:</label>
                <input type="text" id="place" name="place" value="{{ $conference->place }}">
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description">{{ $conference->description }}</textarea>
            </div>
            <div>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" value="{{ $conference->date }}">
            </div>
            <button type="submit">Update Conference</button>
        </form>
    </div>
@endsection
