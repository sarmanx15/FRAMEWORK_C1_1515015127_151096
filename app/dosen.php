<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table='dosen';
    // protected $fillable=['nama','nip','alamat','pengguna_id'];
    protected $guarded = ['id'];
    public function pengguna(){

    	return $this->belongTo(pengguna::class);
    }

    public function dosen_matakuliah(){
    	return $this->hasMany(dosen_matakuliah::class,'dosen_id');
    }
}
