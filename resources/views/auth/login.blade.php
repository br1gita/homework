@extends('layouts.app')

@section('content')
    <div style="text-align: center;">
        <h1>Login</h1>
        <div style="display: inline-block; background-color: #f2f2f2; padding: 20px; border-radius: 5px;">
            <form action="{{ route('login') }}" method="POST" style="text-align: left;">
                @csrf
                <div style="margin-bottom: 10px;">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password"><br>
                </div>
                <div style="margin-bottom: 10px;">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
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
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection
