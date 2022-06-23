<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;

class StoreController extends Controller
{
    public function __invoke(){
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

}
