<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
    	$data ['title'] = "List";
    	return view('list',$data);
    }
}
