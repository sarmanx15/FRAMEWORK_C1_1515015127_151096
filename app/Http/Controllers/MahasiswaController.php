<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    //
     public function awal()
    {
    	return "Hello dari MahasiswaController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'Sarman';
    	$mahasiswa->nim = '1515015127';
    	$mahasiswa->alamat = 'Jl. AW. Syahranie';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	
    	return "data dengan mahasiswa {$mahasiswa->nama} telah disimpan";
    }
}
