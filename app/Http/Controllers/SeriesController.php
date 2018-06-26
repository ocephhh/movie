<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
    	$data['title'] = "Series";
    	return view('series',$data);
    }

    public function seriesAPI()
    {
        return response()->json([
            'series' => \App\Series::take(8)->get()
        ]);
    }
}
