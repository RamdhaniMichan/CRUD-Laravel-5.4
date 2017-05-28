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
/*Route::get('/', function () {
    return view('chapter5.home');
});*/

Route::get('about', function(){
	$halaman='about';
	return view('chapter5.about', compact('halaman'));
});

//Route::get('karyawan', function () {
//	$halaman='karyawan';
//	$karyawan=['Munawar','Budi Santoso','Widya Ningrum','Unggul Jaya'];
//    return view('chapter5.karyawan', compact('halaman','karyawan'));
//});

//Route::get('/Project1','Project1Controller@index');
//Route::post('/Project1/auth','Project1Controller@auth');

//Route::get('/','LatihanController@index');
//Route::get('karyawan/create','KaryawanController@index');
//
//Route::get('karyawan','KaryawanController@index');

Route::get('/dashboard','AdminController@index');

//chapter5

Route::get('/','HomeController@index');
Route::get('/about','AboutController@index');

//---------------------------
Route::group(['middleware'=>['web']],function(){
	Route::get('karyawan','KaryawanController@index');
	Route::get('karyawan/create','KaryawanController@create');
	Route::get('karyawan/{karyawan}','KaryawanController@show');
	Route::post('karyawan','KaryawanController@store');
	Route::get('karyawan/{karyawan}/edit','KaryawanController@edit');
	Route::patch('karyawan/{karyawan}','KaryawanController@update');
	Route::delete('karyawan/{karyawan}','KaryawanController@destroy');
	Route::get('karyawancari','KaryawanController@search');
});
//---------------------------

//Route::get('/karyawan','KaryawanC5Controller@index');

Route::get('sampledata',function(){
	DB::table('employes')->insert([
		[
		'nama' => 'zaid',
		'nip'=>'1001',
		'tgl_lahir'=>'1990-01-22',
		'gender'=>'L',
		'created_at' => '2017-04-24 21:18',
		'updated_at' => '2017-04-24 21:18'
		],
		[
		'nama' => 'Hindun',
		'nip'=>'1002',
		'tgl_lahir'=>'1998-01-22',
		'gender'=>'P',
		'created_at'=>'2017-04-24 21:19',
		'updated_at'=>'2017-04-24 21:20'
		],
		[
		'nama' => 'Michan',
		'nip'=>'1003',
		'tgl_lahir'=>'1996-05-21',
		'gender'=>'L',
		'created_at'=>'2017-04-24 21:19',
		'updated_at'=>'2017-04-24 21:20'
		]
		]);
	});