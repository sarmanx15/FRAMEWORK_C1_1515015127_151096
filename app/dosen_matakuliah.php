<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    //
    protected $table='dosen_matakuliah';
    // protected $fillable=['dosen_id','matakuiah_id'];
    protected $guarded =['id'];
    public function dosen(){

    	return $this->belongTo(dosen::class);

    }

    public function matakuliah(){
    	return $this->belongToMany(matakuliah::class);
    }

    
    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class,'dosen_matakuliah_id');
    }
}
