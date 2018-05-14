<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
    	$data['result'] = Kategori::get();
    	return view('admin/master/kategori/index',$data);
    }

    public function create()
    {
    	return view('admin/master/kategori/create');
    }

    public function save(Request $request)
    {
    	$request->validate
    	([
    		'kategori' => 'required|min:5|'
    	]);
    	
    	$kategori 				=	new Kategori;
    	$kategori->kategori		=	$request->kategori;
    	$kategori->save();
    	return redirect()->route('admin.master.kategori');
    }

    public function edit($id)
    {	
    	$data['row']	=	Kategori::find($id);
    	return view('admin\master\kategori\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'kategori' => 'required|min:5|'
    	]);

    	
    	$kategori 				=	Kategori::find($id);
    	$kategori->kategori		=	$request->kategori;
    	$kategori->save();

    	return redirect()->route('admin.master.kategori'); 
    }

    public function delete($id)
    {
    	$kategori 	=	Kategori::find($id);
    	$kategori->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
