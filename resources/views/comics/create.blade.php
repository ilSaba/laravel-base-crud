@extends('layouts.app')

@section('main')
    <main>
        <form action="{{ route('comics.store') }}" method="post">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="description" placeholder="Description">
            <input type="number" name="price" placeholder="Price">
            <input type="text" name="series" placeholder="Series">
            <input type="date" name="sale_date" placeholder="Sale Date">
            <input type="text" name="type" placeholder="Type">

            <input type="submit" value="Send">

        </form>
    </main>
@endsection
