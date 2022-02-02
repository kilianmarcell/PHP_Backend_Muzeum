@extends('layout')

@section('title', $statue->person)


@section('content')
    <p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>
    <h1>The statue of {{ $statue->person }}</h1>
    <p>Height: {{ $statue->height }} cm</p>
    <p>Selling price: {{ $statue->price }} Ft</p>
@endsection
