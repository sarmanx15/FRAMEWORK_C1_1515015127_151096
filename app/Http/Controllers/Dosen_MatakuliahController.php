<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_MatakuliahController extends Controller
{
    //
    //  public function awal()
    // {
    // 	return "Hello dari Dosen_MatakuliahController";
    // }

    // public function tambah()
    // {
    // 	return $this->simpan();
    // }
    // public function simpan()
    // {
    // 	$dosen_matakuliah = new dosen_matakuliah();
    // 	$dosen_matakuliah->dosen_id = '4';
    // 	$dosen_matakuliah->matakuliah_id = '1';
    // 	$dosen_matakuliah->save();
    	
    // 	return "data telah disimpan";
    // }

    public function awal()
    {
        return view('dosen_matakuliah.awal',['data'=>dosen_matakuliah::all()]);
    }

    public function tambah()
    {
        return view('dosen_matakuliah.tambah');
    }
    public function simpan(Request $input)
    {
        $dosen_matakuliah = new dosen_matakuliah;
        $dosen_matakuliah->dosen_id= $input->dosen_id;
        $dosen_matakuliah->matakuliah_id = $input->matakuliah_id;
        
        $informasi = $dosen_matakuliah->save() ? 'Berhasil simpan data': 'gagal simpan data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    
    }

     public function edit($id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        return view('dosen_matakuliah.edit')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
    }


    public function lihat($id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
    }

    public function update(Request $input, $id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $dosen_matakuliah->dosen_id= $input->dosen_id;
        $dosen_matakuliah->matakuliah_id = $input->matakuliah_id;
        
        $informasi = $dosen_matakuliah->save() ? 'Berhasil update data': 'Gagal Update data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);

    }
    public function hapus($id){
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $informasi = $dosen_matakuliah->delete() ? 'Berhasil hapus data':'Gagal hapus data';
        return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
}
