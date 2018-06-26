<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['title']  = "Home";
        return view('home',$data);
    }

    public function listHomeAPI()
    {
        return response()->json([
            'recent' => \App\Movie::take(8)->get(),
            'latest' => \App\Movie::take(6)->get(),
            'request' => \App\Movie::take(10)->get()
        ]);
    }
}
