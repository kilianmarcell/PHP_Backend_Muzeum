@extends('layout')

@section('title', 'Create statue')


@section('content')
    <h1>New statue</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>
    <form method='POST' action="{{ route('statues.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Person:<br>
            <input type="text" name="person" value="{{ old('person') }}">
            @error('person')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Height:<br>
            <input type="number" name="height" value="{{ old('height') }}">
            @error('height')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Price:<br>
            <input type="number" name="price" value="{{ old('price') }}">
            @error('price')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
@endsection
