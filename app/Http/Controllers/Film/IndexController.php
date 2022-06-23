<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;

class IndexController extends Controller
{
    public function __invoke(){
        $films = Film::all();
        return view('film.index', compact('films'));
    }
}
