<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{

    // public function awal()
    // {
    // 	return "Hello dari DosenController";
    // }

    // public function tambah()
    // {
    // 	return $this->simpan();
    // }
    // public function simpan()
    // {
    // 	$dosen = new dosen();
    // 	$dosen->nama = 'Doni';
    // 	$dosen->nip = '2017023124';
    // 	$dosen->alamat = 'Jl. Suwandi';
    // 	$dosen->pengguna_id = '3';
    // 	$dosen->save();
    	
    // 	return "data dengan nama {$dosen->nama} telah disimpan";
    // }


    public function awal()
    {
        return view('dosen.awal',['data'=>dosen::all()]);
    }

    public function tambah()
    {
        return view('dosen.tambah');
    }
    public function simpan(Request $input)
    {
        $dosen = new dosen;
        $dosen->nama= $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        $dosen->pengguna_id = $input->pengguna_id;
        $informasi = $dosen->save() ? 'Berhasil simpan data': 'gagal simpan data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    
    }

     public function edit($id){
        $dosen = dosen::find($id);
        return view('dosen.edit')->with(array('dosen'=>$dosen));
    }


    public function lihat($id){
        $dosen = dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

    public function update(Request $input, $id){
        $dosen = dosen::find($id);
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        $dosen->pengguna_id = $input->pengguna_id;
        $informasi = $dosen->save() ? 'Berhasil update data': 'Gagal Update data';
        return redirect('dosen')->with(['informasi'=>$informasi]);

    }
    public function hapus($id){
        $dosen = dosen::find($id);
        $informasi = $dosen->delete() ? 'Berhasil hapus data':'Gagal hapus data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }
}
