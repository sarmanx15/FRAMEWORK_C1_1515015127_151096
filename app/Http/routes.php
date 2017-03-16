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
Route::get('pengguna','PenggunaController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('pengguna/tambah/route', function (){
		$pengguna = new App\pengguna();

    	$pengguna->username = 'Ferry';
    	$pengguna->password = 'Ferry';
    	$pengguna->save();    	
    	return "data dengan username {$pengguna->username} telah disimpan";
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('helloword', function () {
    return "hello";
});

Route::get('pengguna/{pengguna?}', function ($pengguna="sarman") {
    return "hallo  $pengguna";
});
Route::get('berita/{berita?}', function ($berita="laravel 5") {
    return "berita $berita belum dibaca";
});

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');




