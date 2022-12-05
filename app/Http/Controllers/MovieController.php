<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id) {
        $movie = Movie::where('id', $id)->first();

        //dd($movie);

        return view('movies.show', ['movie' => $movie]);
    }

    public function list(Request $request) {

        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');
        $genre = $request->query('genre');

        $query = Movie::query();
        if ($order_by != null) {
            $query->orderBy($order_by, $order);
        }

        if ($genre != null) {
            $query->whereHas('genres', function (Builder $q) use ($genre) {
                $q->where('label', $genre);
            });
        }

        $movies = $query->paginate(20);
        $genres = Genre::all();

        return view('movies.list', [
            'movies' => $movies,
            'genres' => $genres,
        ]);
    }

    public function random() {
        $movie = Movie::inRandomOrder()->first();
        $movie_id = $movie->id;
        return redirect('/movies/' . $movie_id);
    }
}
