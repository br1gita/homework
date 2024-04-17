@extends('layouts.app')

@section('content')
    <div>
        <h2>{{ $conference->title}}</h2>
        <p>About: {{ $conference->description}}</p>
        <p>Place: {{ $conference->place}}</p>
        <p>Date: {{ $conference->date}}</p>
    </div>
    <form action="/conferences/{{$conference->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
    <form action="/conferences/{{$conference->id}}/edit" method="PUT">
        @csrf
        @method('UPDATE')
        <button>Edit</button>
    </form>

    <a href="{{route('home.index')}}">Back to all conferences</a>

@endsection







