<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Genre;
use App\Kategori;
use App\RelasiGenreMovie;

class MovieController extends Controller
{
    public function index()
    {
    	$data['result'] = Movie::get();
    	return view('admin/master/movie/index',$data);
    }

    public function create()
    {   
        
        $data['genre']      = Genre::get();
        $data['kategori']   = Kategori::get();
    	return view('admin/master/movie/create',$data);
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
            // 'genre' => 'required',
    		'kategori' => 'required',
    		'rating' => 'required|integer'
    	]);
    	// echo $request->release;die();
    	$gambar         	=   $request->file('gambar')->store('public/gambars');
    	$movie 				=	new Movie;
    	$movie->judul 		=	$request->judul;
    	$movie->film 		=	$request->film;
    	$movie->sinopsis 	=	$request->sinopsis;
    	$movie->rilis 		=	$request->release;
        // $movie->genre       =   $request->genre;
    	$movie->kategori 	=	$request->kategori;
    	$movie->rating 		=	$request->rating;
    	$movie->gambar 		=   $gambar;
    	$movie->save();

        foreach ($request->genre as $key => $value) {
            $relasi         = new RelasiGenreMovie;
            $relasi->film   = $movie->id;
            $relasi->genre  = $value;
            $relasi->save();
        }
    	return redirect()->route('admin.master.movie');
    }

    public function edit($id)
    {	
        $data['genre']      = Genre::get();
        $data['kategori']   = Kategori::get();
    	$data['row']	=	Movie::find($id);
    	return view('admin\master\movie\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'judul' => 'required|min:5|',
    		'film' => 'required',
    		'gambar' => 'required',
    		'sinopsis' => 'required',
    		'release' => 'required',
            // 'genre' => 'required',
    		'kategori' => 'required',
    		'rating' => 'required|integer'
    	]);

    	$gambar         	=   $request->file('gambar')->store('public/gambars');
    	$movie 				=	Movie::find($id);
    	$movie->judul 		=	$request->judul;
    	$movie->film 		=	$request->film;
    	$movie->sinopsis 	=	$request->sinopsis;
    	$movie->rilis 		=	$request->release;
        // $movie->genre       =   $request->genre;
    	$movie->kategori 	=	$request->kategori;
    	$movie->rating 		=	$request->rating;
    	$movie->gambar 		=   $gambar;
    	$movie->save();

        foreach ($request->genre as $key => $value) {
            $relasi         = new RelasiGenreMovie;
            $relasi->film   = $movie->id;
            $relasi->genre  = $value;
            $relasi->save();
        }

    	return redirect()->route('admin.master.movie'); 
    }

    public function delete($id)
    {
    	$movie 	=	Movie::find($id);
    	$movie->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
