<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieGenre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movieGenres = Movie::with("movieGenre")->OrderBy('year')->paginate(100);
        return view("movies.index", compact("movieGenres"));
    }

    public function create()
    {
        
        $movieGenres = MovieGenre::get();
        return view("movies.create", compact("movieGenres"));
    }

    public function store(Request $request)
    {
        $movieGenres = Movie::create([
            "movie_genre_id"=> $request->movie_genre_id,
            "name" => $request ->name,
            "year" => $request ->year,
            
           
            
           
           
        ]);

        return redirect("/");
    }

    public function edit($id)
    {
        $movieGenres = Movie::findOrFail($id);
        $movie = movieGenre::get();

        return view("movies.edit", compact("movieGenres", "movie"));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $movie = Movie::findOrFail($id);
        $movie->update([
        
            // "movie_genre_id"=> $request->movie_genre_id ?? $movie->item_type_id,
            "name" => $request->name ?? $movie->name,
            "year" => $request->year ?? $movie->year,
            
           
        ]);

        return redirect("/");
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect("/");
    }
}
