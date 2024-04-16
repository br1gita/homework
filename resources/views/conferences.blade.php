@extends('layouts.app')

@section('content')
    <h2><a href="/">{{ $conference['title'] }}</a></h2>
    <p>About: {{ $conference['description'] }}</p>
    <p>Place: {{ $conference['place'] }}</p>
    <p>Date: {{ $conference['data'] }}</p>
@endsection
