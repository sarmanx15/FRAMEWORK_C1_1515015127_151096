<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    //
    protected $table='jadwal_matakuliah';
    // protected $fillable=['mahasiswa_id','ruangan_id','dosen_matakuiah_id'];
    protected $guarded = ['id'];

    public function dosen_matakuliah(){
    	return $this->belongTo(dosen_matakuliah::class);
    } 

    public function ruangan(){
		return $this->belongTo(ruangan::class);
    }

    public function mahasiswa(){
    	return $this->belongTo(mahasiswa::class);
    }
}
