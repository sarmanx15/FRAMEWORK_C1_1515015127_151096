<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;
use App\dosen;
use App\matakuliah;

class dosen_MatakuliahController extends Controller
{
    protected $guarded =['id'];
    protected $informasi = 'Gagal Melakukan Aksi';

   public function awal(){
        $semuaJadwalDosen = dosen_matakuliah::all();
        return view('dosen_matakuliah.awal', compact('semuaJadwalDosen'));
    }

    public function tambah()
    {
        // return view('dosen_matakuliah.tambah');
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosen_matakuliah.tambah', compact('dosen','matakuliah'));
    }
    public function simpan(Request $input)
    {
        $dosen_matakuliah = new dosen_matakuliah($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save())
            $this->informasi = 'Dosen Matakuliah Berhasil disimpan';
        
        
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    
    }

     public function edit($id){
       $dosen_matakuliah = dosen_matakuliah::find($id);
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosen_matakuliah.edit', compact('dosen','matakuliah','dosen_matakuliah'));
    }


    public function lihat($id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
    }

    public function update(Request $input, $id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = "Jadwal Mahasiswa Berhasill Diperbaharui";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);

    }
    public function hapus($id, Request $input){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        if($jadwal_matakuliah->delete()) $this->informasi = "Jadwal Mahasiswa Berhasil Dihapus";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
}
