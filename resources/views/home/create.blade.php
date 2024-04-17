@extends('layouts.app')

@section('content')
    <div style="text-align: center;">
        <h1>Create a new conference</h1>
        <div style="display: inline-block; background-color: #f2f2f2; padding: 20px; border-radius: 5px;">
            <form action="{{route('home.store')}}" method="POST" style="text-align: left;">
                @csrf
                <div style="margin-bottom: 10px;">
                    <label for="title">Conference Name:</label><br>
                    <input type="text" id="title" name="title" value="{{old('title')}}"><br>
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="place">Place:</label><br>
                    <input type="text" id="place" name="place" value="{{old('place')}}"><br>
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="description">Description:</label><br>
                    <textarea id="description" name="description">{{old('description')}}</textarea><br>
                </div>
                <div style="margin-bottom: 10px;">
                    <label for="date">Date:</label><br>
                    <select name="year" id="year">
                        @for ($i = date('Y'); $i <= date('Y') + 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <select name="month" id="month">
                        @for ($i = 1; $i <= 12; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select>
                    <select name="day" id="day">
                        @for ($i = 1; $i <= 31; $i++)
                            <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                        @endfor
                    </select><br>
                </div>
                @if($errors->any())
                    <div style="margin-bottom: 10px;">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit">Create Conference</button>
            </form>
        </div>
    </div>
@endsection
