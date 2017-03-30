<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    //
    protected $table='matakuliah';// mendeklarasikan tabel matakuliah
    // protected $fillable=['title','keterangan'];

    public function dosen_matakuliah(){// fungsi dengan nama dosen_matakuliah
    	return $this->hasMany(dosen_matakuliah::class,'matakuliah_id');// memberikan nillai return dari fungsi hasMany yang merelasikan matakuliah dengan banyak dosen_matakuliah dengan foreign key matakuliah_id
    }
}
