@extends('layouts.app')

@section('content')
    <div style="text-align: center;">
        <h1>Register</h1>
        <div style="display: inline-block; background-color: #f2f2f2; padding: 20px; border-radius: 5px;">
            <form action="{{ route('register') }}" method="POST" style="text-align: left;">
                @csrf
                <div style="margin-bottom: 10px;">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password"><br>
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="password_confirmation">Confirm Password:</label><br>
                    <input type="password" id="password_confirmation" name="password_confirmation"><br>
                </div>
                @if ($errors->has('name'))
                    <div style="margin-bottom: 10px;">
                        <p>{{ $errors->first('name') }}</p>
                    </div>
                @endif
                @if ($errors->has('email'))
                    <div style="margin-bottom: 10px;">
                        <p>{{ $errors->first('email') }}</p>
                    </div>
                @endif
                @if ($errors->has('password'))
                    <div style="margin-bottom: 10px;">
                        <p>{{ $errors->first('password') }}</p>
                    </div>
                @endif
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
@endsection
