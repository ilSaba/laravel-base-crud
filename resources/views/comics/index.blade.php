@extends('layouts.app')

@section('main')
    <main>
        @foreach($comics as $comic)
        <div class="card">
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                <h1>{{$comic->title}}</h1>
                <img src="{{ $comic->thumb }}" alt="">
                <p>{{ $comic->description }}</p>
                <h4>Type: {{ $comic->type }}</h4>
                <h4>Series: {{ $comic->series }}</h4>
                <h4>Date: {{ $comic->sale_date }}</h4>
                <h3>$ {{ $comic->price }}</h3>
            </a>
        </div>
        <div>
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a>
        </div>
        <div>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="Delete">
            </form>
        </div>
        <div>
            <a href="{{ route('comics.create') }}">Add New Comic</a>
        </div>
        <a href="{{ route('home') }}">Home</a>
        @endforeach
    </main>
@endsection
