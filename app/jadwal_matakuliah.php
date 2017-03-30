<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    //
    protected $table='jadwal_matakuliah';// mendeklarasikan tabel jadwal_matakuliah
    // protected $fillable=['mahasiswa_id','ruangan_id','dosen_matakuiah_id'];
    protected $guarded = ['id'];// mengabaikan atribut id pada saat melakikan insert/update

    public function dosen_matakuliah(){ // fungsi dengan nama dosen_matakuliah
    	return $this->belongsTo(dosen_matakuliah::class);// memberikan nilai return dari fungsi belongsTo yang merelasikan dosen_matakuliah dengan banyak jadwal_Matakuliah
    } 

    public function ruangan(){  // fungsi dengan nama ruangan
		return $this->belongsTo(ruangan::class); // memberikan nilai return dari fungsi belongsTo yang mrelasikan ruangan dengan banyak jadwal_matakuliah
    }

    public function mahasiswa(){ // fungsi dengan nama mahasiswa
    	return $this->belongsTo(mahasiswa::class); // memberikan nilai return dari fungsi belongsTo yang merelasikan banyak jadwal_matakuliah dengan mahasiswa
    }
}
