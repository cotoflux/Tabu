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



Route::get('/', function () {
    return view('search');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('isadmin');


Route::get('/admin', function () {
	return view('adminView');
});

Route::resource('/articles', 'ArticuloController');

Route::resource('/blog', 'BlogController');

Route::resource('/userAdmin', 'UserAdminController');

Route::post('/searchIo', 'PostController@search');

Route::get('/results', 'PostController@show')->name('searchIo');

Route::resource('/post', 'PostController');



Route::get('/map', function () {
    return view('map');
});
/* 
Route::post('/places/store', 'UserController@store');
Route::post('/places/update/{id}', 'UserController@update');
Route::get('/places/destroy/{id}', 'UserController@destroy');
 */
Route::resource('/places', 'PlaceController');

Route::resource('/events','EventController');
