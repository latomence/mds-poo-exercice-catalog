<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function list() {

        $genres = Genre::paginate(20);

        return view('movies.genres', ['genres' => $genres]);
    }
}
