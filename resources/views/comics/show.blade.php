@extends('layouts.app')

@section('main')
    <img src="{{ $comic->thumb }}" alt="">
    <h1>{{$comic->title}}</h1>
    <p>{{ $comic->description }}</p>
    <h4>Type: {{ $comic->type }}</h4>
    <h4>Series: {{ $comic->series }}</h4>
    <h4>Date: {{ $comic->sale_date }}</h4>
    <h3>$ {{ $comic->price }}</h3>

    <a href="{{ route('comics.create') }}">Add New Comic</a>
@endsection
