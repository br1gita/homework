@extends('layouts.app')

@section('content')
    <div style="text-align: center;">
        <h1>{{$heading}}</h1>

        @if(count($conferences)==0)
            <p>No conferences at the moment</p>
        @endif
        @foreach($conferences as $conference)
            <div style="display: flex; align-items: center; justify-content: center;">
                <h2 style="margin-right: 10px;">
                    <span style="font-weight: bold;">{{ $conference->title}}</span>
                </h2>
                <a href="/conferences/{{$conference->id}}" style="text-decoration: none;">➡️</a>
            </div>
        @endforeach
    </div>
    <a href="/" style="display: block; text-align: center;">Back to home page</a>
@endsection
