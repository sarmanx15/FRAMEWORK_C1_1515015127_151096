<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
use App\Pengguna;

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
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal()
    {
        // return view('mahasiswa.awal',['data'=>mahasiswa::all()]);
        $semuaMahasiswa = mahasiswa::all();
        return view('mahasiswa.awal', compact('semuaMahasiswa'));
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }
    public function simpan(Request $input){
        $pengguna = new pengguna($input->only('username','password'));
        if($pengguna->save()){
            $mahasiswa = new mahasiswa();
            $mahasiswa->nama = $input->nama;
            $mahasiswa->nim = $input->nim;
            $mahasiswa->alamat = $input->alamat;
            if ($pengguna->mahasiswa()->save($mahasiswa)){
                $this->informasi = 'Berhasil Simpan Data';
            }
            return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
        }
    }

     public function edit($id){
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
    }


    public function lihat($id){
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }

    public function update($id, Request $input){
        $mahasiswa = mahasiswa::find($id);
        $pengguna = $mahasiswa->pengguna;
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->save();
        if (!is_null($input->username)){
                $pengguna->fill($input->only('username')); 
            if (!empty($input->password)) {
                $pengguna->password = $input->password;
            }
            if ($pengguna->save()) {
                $this->informasi = 'Berhasil Simpan Data';
            }
        }else{
            $this->informasi = 'Gagal Simpan Data';
        }    
        return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $mahasiswa = mahasiswa::find($id);
        if ($mahasiswa->pengguna()->delete()) {
            if ($mahasiswa->delete()) {
                $this->informasi = 'Berhasil Hapus Data';
            }
        }
        return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
    }
}
