@extends('layouts.app')

@section('main')
    <main>
        <form action="{{ route('comics.store') }}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            @method('POST')
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="description" placeholder="Description">
            <input type="text" name="thumb" placeholder="Img">
            <input type="number" name="price" placeholder="Price">
            <input type="text" name="series" placeholder="Series">
            <input type="date" name="sale_date" placeholder="Sale Date">
            <input type="text" name="type" placeholder="Type">

            <input type="submit" value="Send">
        </form>
    </main>
@endsection
