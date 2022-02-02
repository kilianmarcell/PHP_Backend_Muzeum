@extends('layout')

@section('title', 'Edit statue')


@section('content')
    <h1>Edit statue</h1>

    <p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>
    <form method='POST' action="{{ route('statues.update', $statue->id) }}"><!--laravel resoure code-->
        @method('PATCH')
        @csrf
        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
        <div>
            Person:<br>
            <input type="text" name="person" value="{{ $statue->person }}">
        </div>
        <div>
            Height:<br>
            <input type="number" name="height" value="{{ $statue->height }}">
        </div>
        <div>
            Price:<br>
            <input type="number" name="price" value="{{ $statue->price }}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
@endsection
