<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movie";

    protected $guarded = ['id'];

    public function genreRelasi()
    {
    	return $this->belongsTo('App\Genre','genre');
    }

    public function kategoriRelasi() {
    
    	return $this->belongsTo('App\Kategori','kategori');
    }

}
