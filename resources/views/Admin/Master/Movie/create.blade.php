@extends('adminlte::page')

@section('title', 'Divisi')

@section('content_header')
    <!-- <h1>Master Divisi</h1> -->
@stop

@section('content')
    <div class="row">
    	<div class="col-md-6 col-md-offset-3 col-sm-12">
    		<div class="panel panel-primary">
    			<div class="panel-heading">
    				<h3>Tambah Pelem</h3>
    			</div>
    			<div class="panel-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
    				<form method="post" action="{{ route("admin.master.movie.save") }}" class="form" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="">Judul Film</label>
                                <input type="text" class="form-control" name="judul" required="required" value="{{ old("judul") }}" />
                            </div>
                            <div class="form-group">
                                <label for="">Film</label>
                                <input type="text" class="form-control" name="film" required="required" value="{{ old("film") }}" />
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Sinopsis</label>
                                <textarea name="sinopsis" id="" cols="30" rows="10" class="form-control">{{ old("sinopsis") }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Release</label>
                                <input type="date" class="form-control" name="release" required="required" value="{{ old("release") }}" />
                            </div>
                            <div class="form-group">
                                <label for="">Genre</label>
                                <select name="genre[]" multiple="" id="" class="form-control">
                                    @foreach($genre as $row)
                                    <option value="{{ $row->id }}"> {{ $row->genre }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="kategori" id="" class="form-control">
                                    @foreach($kategori as $row)
                                    <option value="{{ $row->id }}"> {{ $row->kategori }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Rating</label>
                                <input type="text" class="form-control" name="rating" required="required" value="{{ old("rating") }}" />
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>        
                    </form>
    			</div>
    		</div>	
    	</div>    	
    </div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
   
@stop