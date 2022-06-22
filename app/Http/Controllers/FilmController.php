<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use App\Models\FilmTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class filmController extends Controller
{
    public function index(){
        $films = Film::all();
        return view('film.index', compact('films'));
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('film.create', compact('categories', 'tags'));
    }

    public function store(){
        $data = request()->validate([
            'title'=>'required|string',
            'description'=>'required|string',
            'year'=>'required|date',
            'category_id'=>'',
            'tags'=>''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $film = Film::create($data);
        $film->tags()->attach($tags);

        return redirect()->route('film.index');
    }

    public function show(Film $film){
        return view('film.show', compact('film'));
    }

    public function edit(Film $film){
        $categories = Category::all();
        $tags = Tag::all();
        return view('film.edit', compact('film', 'categories', 'tags'));
    }

    public function update(Film $film){
        $data = request()->validate([
            'title'=>'string',
            'description'=>'string',
            'year'=>'date',
            'category_id'=>'',
            'tags' => ''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $film->update($data);
        $film->tags()->sync($tags);
        return redirect()->route('film.show', $film);
    }

    public function destroy(Film $film){
        $film->delete();
        return redirect()->route('film.index');
    }

}
