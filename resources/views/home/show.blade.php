@extends('layouts.app')

@section('content')
    <div style="margin-left: 20px;">
        <h2 style="font-size: 24px; font-weight: bold;">{{ $conference->title }}</h2>
        <p style="font-size: 16px;">About: {{ $conference->description }}</p>
        <p style="font-size: 16px;">Place: {{ $conference->place }}</p>
        <p style="font-size: 16px;">Date: {{ $conference->date }}</p>
    </div>
    <div style="margin-top: 20px;">
        <form action="/conferences/{{ $conference->id }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button style="font-size: 16px; padding: 5px 10px; background-color: #dc3545; color: #fff; border: none; border-radius: 5px;">Delete</button>
        </form>
        <form action="/conferences/{{ $conference->id }}/edit" method="GET" style="display: inline;">
            @csrf
            <button style="font-size: 16px; padding: 5px 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px;">Edit</button>
        </form>
    </div>

    <a href="{{ route('home.index') }}" style="display: block; margin-top: 20px; font-size: 16px;">Back to all conferences</a>
@endsection
