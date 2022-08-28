<?php

namespace App\Http\Controllers;

use App\Models\MovieGenre;
use Illuminate\Http\Request;

class MovieGenreController extends Controller
{
    public function index(Request $request)
    {
        $movieGenres = MovieGenre::paginate(2);
        return view("movies.index", compact("movies"));
    }
    // 
    // 
    
}
