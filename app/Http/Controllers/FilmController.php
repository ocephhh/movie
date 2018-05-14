<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class FilmController extends Controller
{
    public function index($id)
    {   
        $data['title']  = "Film";
        $data['row']	= Movie::find($id);
        return view('film',$data);
    }
}
