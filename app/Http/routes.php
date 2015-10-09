<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'MahasiswaController@show_register');

Route::post('/register',function(){
	$inputMahasiswa = new App\Mahasiswa;
	$inputMahasiswa->nama = Input::get('nama');
	$inputMahasiswa->nim = Input::get('nim');
	$inputMahasiswa->ipk = Input::get('ipk');

	$inputMahasiswa->save();
	return Redirect::to('/register');
});

Route::get('/list', 'MahasiswaController@show_all');

Route::get('/list/delete/{id}','MahasiswaController@delete');


Route::get('/list/edit/{id}','MahasiswaController@edit');

Route::post('/list/edit/{id}',function(){
	$data = App\Mahasiswa::find(Input::get('id'));
	$data->nama = Input::get('nama');
	$data->nim = Input::get('nim');
	$data->ipk = Input::get('ipk');
	$data->save();

	return Redirect::to('/list');
});


