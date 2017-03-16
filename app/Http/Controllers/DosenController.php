<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{

    public function awal()
    {
    	return "Hello dari DosenController";
    }

    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Doni';
    	$dosen->nip = '2017023124';
    	$dosen->alamat = 'Jl. Suwandi';
    	$dosen->pengguna_id = '3';
    	$dosen->save();
    	
    	return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
