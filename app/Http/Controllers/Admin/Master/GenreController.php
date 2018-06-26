<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {
    	$data['result'] = Genre::get();
    	return view('admin/master/genre/index',$data);
    }

    public function create()
    {
    	return view('admin/master/genre/create');
    }

    public function save(Request $request)
    {
    	$request->validate
    	([
    		'genre' => 'required|min:5|'
    	]);
    	
    	$genre 				=	new Genre;
    	$genre->genre		=	$request->genre;
    	$genre->save();
    	return redirect()->route('admin.master.genre');
    }

    public function edit($id)
    {	
    	$data['row']	=	Genre::find($id);
    	return view('admin\master\genre\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'genre' => 'required|min:5|'
    	]);

    	
    	$genre 				=	Genre::find($id);
    	$genre->genre		=	$request->genre;
    	$genre->save();

    	return redirect()->route('admin.master.genre'); 
    }

    public function delete($id)
    {
    	$genre 	=	Genre::find($id);
    	$genre->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
    
    // menampilkan seluruh genre melalui API
    public function listAPI()
    {
        $data = Genre::all();
        return response()->json([
            'data' => $data
        ]);
    }

    public function tambahAPI(Request $request)
    {
        $request->validate
        ([
            'genre' => 'required|min:5'
        ]);
        
        $genre              =   new Genre;
        $genre->genre       =   $request->genre;
        $genre->save();
        return response()->json([
            'message' => 'Berhasil Menambah Data'
        ]);
    }

    public function editAPI($id, Request $request)
    {
        $request->validate
        ([
            'genre' => 'required|min:5'
        ]);

        
        $genre              =   Genre::find($id);
        $genre->genre       =   $request->genre;
        $genre->save();  
        return response()->json([
            'message' => 'Berhasil Mengubah Data'
        ]); 
    }

    public function deleteAPI($id)
    {
        $genre  =   Genre::find($id);
        $genre->forceDelete();
        return response()->json([
            'message' => 'Berhasil Menghapus Data'
        ]); 
    }
}
