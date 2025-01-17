<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function show($id) {
        $series = Series::where('id', $id)->first();

        return view('series.show', ['series' => $series]);
    }

    public function list(Request $request) {
        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');
        $genre = $request->query('genre');

        $query = Series::query();
        if ($order_by != null) {
            $query->orderBy($order_by, $order);
        }

        if ($genre != null) {
            $query->whereHas('genres', function (Builder $q) use ($genre) {
                $q->where('label', $genre);
            });
        }

        $series = $query->paginate(20);
        $genres = Genre::all();

        return view('series.list', [
            'series' => $series,
            'genres' => $genres,
        ]);
    }

    public function random() {
        $series = Series::inRandomOrder()->first();
        $series_id = $series->id;
        return redirect('/series/' . $series_id);
    }
}
