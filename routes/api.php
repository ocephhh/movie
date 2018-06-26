<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('password', function(){
	echo bcrypt('qwerty');
});

Route::get('/','HomeController@listHomeAPI');
Route::get('/genre','GenreController@genreApi');
Route::get('/series','SeriesController@seriesAPI');
Route::get('/news','NewsController@newsAPI');

Route::post('auth/login','Auth\LoginController@doLoginAPI');

Route::middleware('auth:api')->group(function(){
	Route::prefix('v1')->group(function(){
		Route::prefix('admin')->group(function(){

			Route::prefix('master')->group(function(){
				Route::get('genre', 'Admin\Master\GenreController@listAPI');
				Route::post('genre', 'Admin\Master\GenreController@tambahAPI');
				Route::put('genre/{id}', 'Admin\Master\GenreController@editAPI');
				Route::delete('genre/{id}', 'Admin\Master\GenreController@deleteAPI');

				Route::get('movie', 'Admin\Master\MovieController@listAPI');
				Route::post('movie', 'Admin\Master\MovieController@tambahAPI');
				Route::post('movie/{id}', 'Admin\Master\MovieController@editAPI');
				Route::delete('movie/{id}', 'Admin\Master\MovieController@deleteAPI');

				Route::get('kategori', 'Admin\Master\KategoriController@listAPI');
				Route::post('kategori', 'Admin\Master\KategoriController@tambahAPI');
				Route::put('kategori/{id}', 'Admin\Master\KategoriController@editAPI');
				Route::delete('kategori/{id}', 'Admin\Master\KategoriController@deleteAPI');

				Route::get('series', 'Admin\Master\SeriesController@listAPI');
				Route::post('series', 'Admin\Master\SeriesController@tambahAPI');
				Route::post('series/{id}', 'Admin\Master\SeriesController@editAPI');
				Route::delete('series/{id}', 'Admin\Master\SeriesController@deleteAPI');

				Route::get('list', 'Admin\Master\ListController@a_z_API');
				Route::post('list', 'Admin\Master\ListController@tambahAPI');
				Route::post('list/{id}', 'Admin\Master\ListController@editAPI');
				Route::delete('list/{id}', 'Admin\Master\ListController@deleteAPI');
			});
		});
	});
});