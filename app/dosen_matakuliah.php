<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    //
    protected $table='dosen_matakuliah'; //mendefinisikan nama tabel dosen_matakuliah
    // protected $fillable=['dosen_id','matakuiah_id'];
    protected $guarded =['id'];//mengabaikan aribut id pada saat melakukan insert/delete oleh eloquent
    public function dosen(){ // sebuah fungsi dosen

    	return $this->belongsTo(dosen::class); //memberikan nilai return dari fungsi belongsTo yang  merelasikan model dosen dengan model dosen_matakuliah

    }

    public function matakuliah(){ //fungsi matakuliah
    	return $this->belongsTo(matakuliah::class); // memberikan nilai return dari fungsi belongsTo yang merelasikan banyak model dosen_matakuliah dengan model matakuliah
    }

    
    public function jadwal_matakuliah(){ //fungsi jadwal_matakuliah
    	return $this->hasMany(jadwal_matakuliah::class,'dosen_matakuliah_id'); //memberikan nilai return dari fungsi hasMany yang merelasikan model dosen_matakuliah dengan banyak model jadwal_matakuliah dengan foreign key dosen_matakuliah_id
    }
}
