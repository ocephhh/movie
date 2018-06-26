<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/password',function(Request $request){
    echo bcrypt("asdfasdf");
});

Route::get('/','HomeController@index')->name('home');

Route::get('/news','NewsController@index')->name('news');
Route::get('/series','SeriesController@index')->name('series');
Route::get('/contact','ContactController@index')->name('contact');
Route::get('/list','ListController@index')->name('list');
Route::get('/genre','GenreController@index')->name('genre');
Route::get('/film/{id}','FilmController@index')->name('film');
Auth::routes();

Route::middleware(['auth'])->group(function(){
	Route::prefix('admin')->group(function(){

		Route::get('dashboard','Admin\DashboardController@index')->name('admin.dashboard');

	Route::prefix('master')->group(function(){
		Route::get('movie','Admin\Master\MovieController@index')->name("admin.master.movie");
		Route::get('movie/create','Admin\Master\MovieController@create')->name("admin.master.movie.create");
		Route::post('movie/create','Admin\Master\MovieController@save')->name("admin.master.movie.save");
		Route::get('movie/edit/{id}','Admin\Master\MovieController@edit')->name("admin.master.movie.edit");
		Route::put('movie/edit/{id}','Admin\Master\MovieController@update')->name("admin.master.movie.update");
		Route::delete('movie/delete/{id}','Admin\Master\MovieController@delete')->name("admin.master.movie.delete");

		Route::get('kategori','Admin\Master\KategoriController@index')->name("admin.master.kategori");
		Route::get('kategori/create','Admin\Master\KategoriController@create')->name("admin.master.kategori.create");
		Route::post('kategori/create','Admin\Master\KategoriController@save')->name("admin.master.kategori.save");
		Route::get('kategori/edit/{id}','Admin\Master\KategoriController@edit')->name("admin.master.kategori.edit");
		Route::put('kategori/edit/{id}','Admin\Master\KategoriController@update')->name("admin.master.kategori.update");
		Route::delete('kategori/delete/{id}','Admin\Master\KategoriController@delete')->name("admin.master.kategori.delete");

		Route::get('genre','Admin\Master\GenreController@index')->name("admin.master.genre");
		Route::get('genre/create','Admin\Master\GenreController@create')->name("admin.master.genre.create");
		Route::post('genre/create','Admin\Master\GenreController@save')->name("admin.master.genre.save");
		Route::get('genre/edit/{id}','Admin\Master\GenreController@edit')->name("admin.master.genre.edit");
		Route::put('genre/edit/{id}','Admin\Master\GenreController@update')->name("admin.master.genre.update");
		Route::delete('genre/delete/{id}','Admin\Master\GenreController@delete')->name("admin.master.genre.delete");

		Route::get('series','Admin\Master\SeriesController@index')->name("admin.master.series");
		Route::get('series/create','Admin\Master\SeriesController@create')->name("admin.master.series.create");
		Route::post('series/create','Admin\Master\SeriesController@save')->name("admin.master.series.save");
		Route::get('series/edit/{id}','Admin\Master\SeriesController@edit')->name("admin.master.series.edit");
		Route::put('series/edit/{id}','Admin\Master\SeriesController@update')->name("admin.master.series.update");
		Route::delete('series/delete/{id}','Admin\Master\SeriesController@delete')->name("admin.master.series.delete");

		Route::get('contact','Admin\Master\ContactController@index')->name("admin.master.contact");
		Route::get('contact/create','Admin\Master\ContactController@create')->name("admin.master.contact.create");
		Route::post('contact/create','Admin\Master\ContactController@save')->name("admin.master.contact.save");
		Route::get('contact/edit/{id}','Admin\Master\ContactController@edit')->name("admin.master.contact.edit");
		Route::put('contact/edit/{id}','Admin\Master\ContactController@update')->name("admin.master.contact.update");
		Route::delete('contact/delete/{id}','Admin\Master\ContactController@delete')->name("admin.master.contact.delete");
	});
	});
});
