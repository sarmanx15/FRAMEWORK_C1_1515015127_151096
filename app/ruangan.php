<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    //
    protected $table='ruangan';// mendeklarasikan tabel ruangan
    // protected $fillable=['title'];
    public function jadwal_matakuliah(){// fungsi dengan nama jadwal_matakuliah
    	return $this->hasMany(jadwal_matakuliah::class,'ruangan_id');// memberikan nilai return dari fungsi hasMany dengan merelasikan ruangan dengan banyak jadwal_matakuliah dengan foreign key ruangan_id
    }
}
