<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id) {
        $movie = Movie::where('id', $id)->first();

        //dd($movie);

        return view('movies.show', ['movie' => $movie]);
    }

    public function list(Request $resquest) {

        if($resquest->query('orderBy') && $resquest->query('order'))
        {
            $movies = Movie::orderBy($resquest->query('orderBy'), $resquest->query('order'))
                ->paginate(20);
        } else {
            $movies = Movie::paginate(20);
        }

        return view('movies.list', ['movies' => $movies]);
    }

    public function random() {
        $movie = Movie::inRandomOrder()->first();
        $movie_id = $movie->id;
        return redirect('/movies/' . $movie_id);
    }
}
