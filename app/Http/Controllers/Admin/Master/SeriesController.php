<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Series;

class SeriesController extends Controller
{
    public function index()
    {
    	$data['result'] = Series::get();
    	return view('admin/master/series/index',$data);
    }

    public function create()
    {
    	return view('admin/master/series/create');
    }

    public function save(Request $request)
    {
    	$request->validate
    	([
    		'judul' => 'required|min:5|',
    		'film' => 'required',
    		'gambar' => 'required',
    		'sinopsis' => 'required',
    		'release' => 'required',
            'genre' => 'required',
    		'rating' => 'required|integer'
    	]);
    	
    	$gambar         	=   $request->file('gambar')->store('public/gambars');
    	$series 			=	new Series;
    	$series->judul 		=	$request->judul;
    	$series->film 		=	$request->film;
    	$series->sinopsis 	=	$request->sinopsis;
    	$series->rilis 		=	$request->release;
        $series->genre      =   $request->genre;
    	$series->rating 	=	$request->rating;
    	$series->gambar 	=   $gambar;
    	$series->save();
    	return redirect()->route('admin.master.series');
    }

    public function edit($id)
    {	
    	$data['row']	=	Series::find($id);
    	return view('admin\master\series\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'judul' => 'required|min:5|',
    		'film' => 'required',
    		'gambar' => 'required',
    		'sinopsis' => 'required',
    		'release' => 'required',
            'genre' => 'required',
    		'rating' => 'required|integer'
    	]);

    	$gambar         	=   $request->file('gambar')->store('public/gambars');
    	$series 			=	Series::find($id);
    	$series->judul 		=	$request->judul;
    	$series->film 		=	$request->film;
    	$series->sinopsis 	=	$request->sinopsis;
    	$series->rilis 		=	$request->release;
        $series->genre      =   $request->genre;
    	$series->rating 	=	$request->rating;
    	$series->gambar 	=   $gambar;
    	$series->save();

    	return redirect()->route('admin.master.series'); 
    }

    public function delete($id)
    {
    	$series 	=	Series::find($id);
    	$series->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }

    public function ListAPI()
    {
        $data = Series::all();
        return response()->json([
            'data' => $data
        ]);
    }

    public function tambahAPI(Request $request)
    {
        $request->validate

        ([
            'judul' => 'required|min:5|',
            'film' => 'required',
            'gambar' => 'required',
            'sinopsis' => 'required',
            'release' => 'required',
            'genre' => 'required',
            'rating' => 'required|integer',
            'negara' => 'required'
        ]);
        
        $gambar             =   $request->file('gambar')->store('public/gambars');
        $series             =   new Series;
        $series->judul      =   $request->judul;
        $series->film       =   $request->film;
        $series->sinopsis   =   $request->sinopsis;
        $series->rilis      =   $request->release;
        $series->genre      =   $request->genre;
        $series->rating     =   $request->rating;
        $series->negara     =   $request->negara;
        $series->gambar     =   $gambar;
        $series->save();

        return response()->json([
            'message' => 'Berhasil Menambah Data'
        ]);
    }

    public function editAPI($id, Request $request)
    {
        $request->validate

        ([
            'judul' => 'required|min:5|',
            'film' => 'required',
            'gambar' => 'required',
            'sinopsis' => 'required',
            'release' => 'required',
            'genre' => 'required',
            'rating' => 'required|integer',
            'negara' => 'required'
        ]);
        
        $gambar             =   $request->file('gambar')->store('public/gambars');
        $series             =   Series::find($id);
        $series->judul      =   $request->judul;
        $series->film       =   $request->film;
        $series->sinopsis   =   $request->sinopsis;
        $series->rilis      =   $request->release;
        $series->genre      =   $request->genre;
        $series->rating     =   $request->rating;
        $series->negara     =   $request->negara;
        $series->gambar     =   $gambar;
        $series->save();

        return response()->json([
            'message' => 'Berhasil Mengubah Data'
        ]);
    }

    public function deleteAPI($id)
    {
        $genre  =   Series::find($id);
        $genre->forceDelete();
        return response()->json([
            'message' => 'Berhasil Menghapus Data'
        ]); 
    }
}
