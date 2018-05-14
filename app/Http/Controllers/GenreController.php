<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {	
    	$data['title'] = "Genre";
    	return view('genre',$data);
    }
}
