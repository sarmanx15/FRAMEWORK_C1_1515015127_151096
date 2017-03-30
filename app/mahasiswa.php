<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
    protected $table='mahasiswa';
    // protected $fillable=['nama','nim','alamat','pengguna_id'];
    protected $guarded=['id'];

    public function pengguna(){

    	return $this->belongTo(pengguna::class);
    }

    public function jadwalmatakuliah(){
    	return $this->hasMany(jadwalmatakuliah::class,'mahasiswa_id');
    }
    
}
