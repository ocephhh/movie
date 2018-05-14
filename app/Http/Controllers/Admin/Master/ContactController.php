<?php

namespace App\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
    	$data['result'] = Contact::get();
    	return view('admin/master/contact/index',$data);
    }

    public function create()
    {
    	return view('admin/master/contact/create');
    }

    public function save(Request $request)
    {
    	$request->validate
    	([
    		'nama' => 'required|min:5|',
    		'email' => 'required',
    		'telepon' => 'required',
    		'pesan' => 'required'
    	]);
    	
    	$contact 				=	new Contact;
    	$contact->nama			=	$request->nama;
    	$contact->email		=	$request->email;
    	$contact->telepon		=	$request->telepon;
    	$contact->pesan		=	$request->pesan;
    	$contact->save();
    	return redirect()->route('admin.master.contact');
    }

    public function edit($id)
    {	
    	$data['row']	=	Contact::find($id);
    	return view('admin\master\contact\edit',$data);
    }

    public function update($id, Request $request)
    {
    	([
    		'nama' => 'required|min:5|',
    		'email' => 'required',
    		'telepon' => 'required|integer',
    		'pesan' => 'required'
    	]);

    	
    	$contact 				=	Contact::find($id);
    	$contact->nama			=	$request->nama;
    	$contact->email			=	$request->email;
    	$contact->telepon		=	$request->telepon;
    	$contact->pesan			=	$request->pesan;
    	$contact->save();

    	return redirect()->route('admin.master.contact'); 
    }

    public function delete($id)
    {
    	$contact 	=	Contact::find($id);
    	$contact->forceDelete();
    	echo json_encode(['status'=>true,'msg'=>'Berhasil Menghapus Data']);
    }
}
