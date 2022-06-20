@extends('loyouts.main')
@section('content')
    <div>
        <div>{{$film->id}}. {{$film->title}} {{$film->year}}</div>
        <div>{{$film->description}}</div>
    </div>
    <div>
        <a href="{{route('film.edit', $film)}}" class="btn btn-outline-success mt-3">Edit</a>
        <form action="{{route('film.delete', $film)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-outline-danger mt-3">
        </form>
        <a href="{{route('film.index')}}" class="btn btn-outline-secondary mt-3">Back</a>
    </div>
@endsection
