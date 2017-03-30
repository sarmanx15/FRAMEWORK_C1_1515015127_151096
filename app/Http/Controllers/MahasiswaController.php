<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    //
    //  public function awal()
    // {
    // 	return "Hello dari MahasiswaController";
    // }

    // public function tambah()
    // {
    // 	return $this->simpan();
    // }
    // public function simpan()
    // {
    // 	$mahasiswa = new mahasiswa();
    // 	$mahasiswa->nama = 'Sarman';
    // 	$mahasiswa->nim = '1515015127';
    // 	$mahasiswa->alamat = 'Jl. AW. Syahranie';
    // 	$mahasiswa->pengguna_id = '1';
    // 	$mahasiswa->save();
    	
    // 	return "data dengan mahasiswa {$mahasiswa->nama} telah disimpan";
    // }

    public function awal()
    {
        return view('mahasiswa.awal',['data'=>mahasiswa::all()]);
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }
    public function simpan(Request $input)
    {
        $mahasiswa = new mahasiswa;
        $mahasiswa->nama= $input->nama;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->pengguna_id = $input->pengguna_id;
        $informasi = $mahasiswa->save() ? 'Berhasil simpan data': 'gagal simpan data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    
    }

     public function edit($id){
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
    }


    public function lihat($id){
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }

    public function update(Request $input, $id){
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->pengguna_id = $input->pengguna_id;
        $informasi = $mahasiswa->save() ? 'Berhasil update data': 'Gagal Update data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);

    }
    public function hapus($id){
        $mahasiswa = mahasiswa::find($id);
        $informasi = $mahasiswa->delete() ? 'Berhasil hapus data':'Gagal hapus data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    }
}
