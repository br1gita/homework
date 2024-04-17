@extends('layouts.app')

@section('content')
    <div>
        <h1>Create a new conference</h1>
        <form action="/conference" method="POST">
            @csrf
            <div>
                <label for="title">Conference Name:</label>
                <input type="text" id="title" name="title">

                <label for="place">Place:</label>
                <input type="text" id="place" name="place">

                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>

                <label for="date">Date:</label>
                <select name="month" id="month">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                    @endfor
                </select>
                <select name="day" id="day">
                    @for ($i = 1; $i <= 31; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <select name="year" id="year">
                    @for ($i = date('Y'); $i <= date('Y') + 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <button type="submit">Create Conference</button>
        </form>
    </div>
@endsection
