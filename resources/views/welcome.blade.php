@extends('layouts.app')

@section('content')
<h1>{{$heading}}</h1>

@if(count($conferences)==0)
    <p>No conferences at the moment</p>
@endif
@foreach($conferences as $conference)
    <h2>
        <a href="/conferences/{{$conference['id']}}">{{ $conference['title']}}</a>
    </h2>
@endforeach
@endsection
