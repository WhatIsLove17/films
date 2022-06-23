<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('film.create', compact('categories', 'tags'));
    }
}
