@extends('layouts.app')

@section('main')
    <main>
        @foreach($comics as $comic)
        <div class="card">
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                <img src="{{ $comic->thumb }}" alt="">
                <h1>{{$comic->title}}</h1>
                <p>{{ $comic->description }}</p>
                <h4>Type: {{ $comic->type }}</h4>
                <h4>Series: {{ $comic->series }}</h4>
                <h4>Date: {{ $comic->sale_date }}</h4>
                <h3>$ {{ $comic->price }}</h3>
            </a>
        </div>
        @endforeach
    </main>
@endsection
