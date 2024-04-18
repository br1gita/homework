@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
{{--        @if (Route::has('login'))--}}
            <div class="top-right links">
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ trans('pagination.register') }}</a>
                    @endif
                @endauth
            </div>
{{--        @endif--}}
    <div class="content">
        <div class="title m-b-md">
            CONFERENCE
        </div>
        <p class="msg">{{ session('msg') }}</p>
        <a href="{{ route('home.index') }}" class="btn">See conference list</a>
        <a href="{{ route('home.create') }}" class="btn">Create a conference</a>
    </div>
    </div>
@endsection
