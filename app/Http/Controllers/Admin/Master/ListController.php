<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AZLizt;

class ListController extends Controller
{
    public function a_z_API()
    {
        $data = AZLizt::all();

        return response()->json([
            'data' => $data
        ]);
    }

    public function tambahAPI(Request $request)
    {
        $request->validate

        ([
            'judul' => 'required|min:5',
            'year' => 'required',
            'status' => 'required',
            'genre' => 'required',
            'rating' => 'required|integer',
            'gambar' => 'required'

        ]);
        
        $gambar         	=   $request->file('gambar')->store('public/gambars');
    	$series 			=	new AZLizt;
    	$series->judul 		=	$request->judul;
    	$series->year 		=	$request->year;
    	$series->status 	=	$request->status;
        $series->genre      =   $request->genre;
    	$series->rating 	=	$request->rating;
    	$series->gambar 	=   $gambar;
    	$series->save();

        return response()->json([
            'message' => 'Berhasil Menambah Data'
        ]);
    }

    public function editAPI($id, Request $request)
    {
    	 $request->validate

        ([
            'judul' => 'required|min:5',
            'year' => 'required',
            'status' => 'required',
            'genre' => 'required',
            'rating' => 'required|integer',
            'gambar' => 'required'

        ]);
        
        $gambar         	=   $request->file('gambar')->store('public/gambars');
    	$series 			=	AZLizt::find($id);
    	$series->judul 		=	$request->judul;
    	$series->year 		=	$request->year;
    	$series->status 	=	$request->status;
        $series->genre      =   $request->genre;
    	$series->rating 	=	$request->rating;
    	$series->gambar 	=   $gambar;
    	$series->save();

    	return response()->json([
            'message' => 'Berhasil Mengubah Data'
        ]);
    }


    public function deleteAPI($id)
    {
        $genre  =   AZLizt::find($id);
        $genre->forceDelete();
        return response()->json([
            'message' => 'Berhasil Menghapus Data'
        ]); 
    }
}
