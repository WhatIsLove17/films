<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Http\Requests\Film\UpdateRequest;
use App\Models\Film;

class UpdateController extends Controller
{

    public function __invoke(Film $film, UpdateRequest $request){
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);
        $film->update($data);
        $film->tags()->sync($tags);
        return redirect()->route('film.show', $film);
    }

}
