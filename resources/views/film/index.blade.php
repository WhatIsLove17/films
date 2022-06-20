@extends('loyouts.main')
@section('content')
    <div>
        <h1>Available films:</h1>
        @foreach($films as $film)
            <div><a href="{{route('film.show', $film)}}">{{$film->id}}. {{$film->title}} </a></div>
        @endforeach
        <div>
            <a href="{{route('film.create')}}" class="btn btn-outline-success mt-3">Add</a>
        </div>
    </div>
@endsection
