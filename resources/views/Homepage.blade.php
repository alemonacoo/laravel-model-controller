@extends('layouts.app')

@section('body')
@foreach ($movies as $movie)
    <div class="movieCard">
        <h2>{{ $movie['title'] }}</h2>
        <p>{{ $movie['nationality'] }}</p>
        <p>{{ $movie['date'] }}</p>
        <p>{{ $movie['vote'] }}</p>
    </div>
@endforeach
@endsection
