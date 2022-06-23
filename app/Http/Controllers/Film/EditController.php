<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Film;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Film $film){
        $categories = Category::all();
        $tags = Tag::all();
        return view('film.edit', compact('film', 'categories', 'tags'));
    }
}
