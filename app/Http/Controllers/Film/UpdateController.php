<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;

class UpdateController extends Controller
{

    public function __invoke(Film $film){
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

}
