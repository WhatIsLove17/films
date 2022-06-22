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
                <textarea type="text" name="description" class="form-control" id="description" rows="6" placeholder="Description">{{$film->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach($categories as $category)
                        <option {{$category->id === $film->category_id ? ' selected' : ''}}
                            value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($film->tags as $filmTag)
                            {{$tag->id === $filmTag->id ? ' selected' : ''}}
                            @endforeach
                            value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
