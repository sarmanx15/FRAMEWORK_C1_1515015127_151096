<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    //
    protected $table='pengguna';// mendeklarasikan tabel pengguna
    	// protected $fillable=['username','password'];
    public function mahasiswa(){// fungsi dengan nama mahasiswa
    	return $this->hasOne(mahasiswa::class,'pengguna_id');// memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan mahasiswa dengan foreign ket pengguna_id
    }
    public function dosen(){// fungsi dengan nama dosen
    	return $this->hasOne(dosen::class,'pengguna_id');// memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan dosen dengan foreign key pengguna_id
    }
}
