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

Route::get('helloword', function () {
    return "hello";
});

Route::get('pengguna/{pengguna?}', function ($pengguna="sarman") {
    return "hallo  $pengguna";
});
Route::get('berita/{berita?}', function ($berita="laravel 5") {
    return "berita $berita belum dibaca";
});


