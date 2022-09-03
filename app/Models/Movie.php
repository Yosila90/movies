<?php

namespace App\Models;

use App\Models\MovieGenre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $fillable = ["name", "year", "movie_genre_id"];

    public function MovieGenre()
    {
        return $this->belongsTo(MovieGenre::class, 'movie_genre_id');
    }
}
