@extends('loyouts.main')
@section('content')
    <div>
        <form action="{{route('film.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                       value="{{old('title')}}">
            </div>
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="mb-3">
                <label for="year" class="form-label">Date</label>
                <input type="date" name="year" class="form-control" id="year" placeholder="Title"
                       value="{{old('year')}}">
            </div>
            @error('year')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" id="description" rows="6"
                          placeholder="Description">{{old('description')}}</textarea>
            </div>
            @error('description')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{old('category_id') == $category->id ? ' selected' : ''}}
                            value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            {{old('tags') == $category->id ? ' selected' : ''}}
                            value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
