<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;

class filmController extends Controller
{
    public function index(){
        $films = Film::all();
        return view('film.index', compact('films'));
    }

    public function create(){
        $categories = Category::all();
        return view('film.create', compact('categories'));
    }

    public function store(){
        $data = request()->validate([
            'title'=>'string',
            'description'=>'string',
            'year'=>'date',
            'category_id'=>''
        ]);
        Film::create($data);
        return redirect()->route('film.index');
    }

    public function show(Film $film){
        return view('film.show', compact('film'));
    }

    public function edit(Film $film){
        return view('film.edit', compact('film'));
    }

    public function update(Film $film){
        $data = request()->validate([
            'title'=>'string',
            'description'=>'string',
            'year'=>'date'
        ]);
        $film->update($data);
        return redirect()->route('film.show', $film);
    }

    public function destroy(Film $film){
        $film->delete();
        return redirect()->route('film.index');
    }

}
