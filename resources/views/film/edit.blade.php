@extends('loyouts.main')
@section('content')
    <div>
        <form action="{{route('film.update', $film)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$film->title}}">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Date</label>
                <input type="date" name="year" class="form-control" id="year" placeholder="Title" value="{{$film->year}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" id="description" rows="6" placeholder="Description" value="{{$film->description}}"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
