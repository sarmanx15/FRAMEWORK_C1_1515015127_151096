<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table='dosen';
    //digunakan untuk mendefinisikan nama tabel
    // protected $fillable=['nama','nip','alamat','pengguna_id'];
    protected $guarded = ['id'];
    //berfungsi untuk mengabaikan atribut id oleh Eloquent pada saat kita melakukan insert/update.
    public function pengguna(){// fungsi dengan nama pengguna

    	return $this->belongsTo(pengguna::class);// fungsi pengguna yang mempunyai nilai return dari fungsi belongsTo yang merelasikan tabel pengguna dengan model dosen
    }
    

    public function dosen_matakuliah(){ // fungsi dengan nama dosen_matakuliah
    	return $this->hasMany(dosen_matakuliah::class,'dosen_id');// model dosen_matakuliah yang mempunyai nilai return dari fungsi hasMany yang merelasikan dosen dengan banyak dosen_matakuliah dengan dosen_id sebagai foreign key nya
    }
    
}
