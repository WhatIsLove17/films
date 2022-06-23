<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Http\Requests\Film\StoreRequest;
use App\Models\Film;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);
        $film = Film::create($data);
        $film->tags()->attach($tags);

        return redirect()->route('film.index');
    }

}
