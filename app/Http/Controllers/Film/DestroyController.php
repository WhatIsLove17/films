<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;

class DestroyController extends Controller
{
    public function __invoke(Film $film){
        $film->delete();
        return redirect()->route('film.index');
    }
}
