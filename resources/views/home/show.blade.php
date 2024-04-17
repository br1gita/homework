@extends('layouts.app')

@section('content')
    <div>
        <h2>{{ $conference->title}}</h2>
        <p>About: {{ $conference->description}}</p>
        <p>Place: {{ $conference->place}}</p>
        <p>Date: {{ $conference->date}}</p>
    </div>
    <a href="/conferences">Back to all conferences</a>

@endsection







