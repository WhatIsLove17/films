<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;

class ShowController extends Controller
{
    public function __invoke(Film $film){
        return view('film.show', compact('film'));
    }
}
