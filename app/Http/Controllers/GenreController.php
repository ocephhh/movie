<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class GenreController extends Controller
{
    public function index(Request $request)
    {	
    	$data['title'] = "Genre";
    	$data['genre'] = Genre::where('genre',$request->genre)->first();

    	if(!$data['genre']) return abort(404);

    	$genre = $data['genre'];
    	$data['films'] = Movie::whereHas('genreRelasi',function($query) use($genre) 
    		{
    			$query->where('relasi_genre_movie.genre',$genre->id);
    		})->get();

    	return view('genre',$data);
    }

    public function genreAPI()
    {
        // return response()->json([
        //     'recent' => \App\Movie::take(8)->get(),
        //     'latest' => \App\Movie::take(6)->get(),
        //     'request' => \App\Movie::take(10)->get()
        // ]);

        $films = Genre::all();
        $pelem = Movie::all();
        return response()->json([
            'genre' => $films,
            'movie' => $pelem
        ]);
    }
}
