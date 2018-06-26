<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = "movie";

    protected $guarded = ['id'];

    public function genreRelasi()
    {
    	//@parameter 1 adalah nama model relasinya
    	//@parameter 2 adalah tabel relasi antara movie dan genre
    	//@parameter 3 adalah id movie ditabel relasi
    	//@parameter 4 adalah id genre ditabel relasi
    	return $this->belongsToMany('App\Genre', 'relasi_genre_movie', 'film', 'genre');
    }

    public function kategoriRelasi() {
    
    	return $this->belongsTo('App\Kategori','kategori');
    }

}
