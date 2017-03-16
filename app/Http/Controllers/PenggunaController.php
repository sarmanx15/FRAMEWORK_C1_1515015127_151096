<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class PenggunaController extends Controller
{
    //p
    public function awal()
    {
    	return "Hello dari PenggunaController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$pengguna = new pengguna();
    	$pengguna->username = 'sarman';
    	$pengguna->password = 'sarman';
    	$pengguna->save();
    	
    	return "data dengan username {$pengguna->username} telah disimpan";
    }
}
