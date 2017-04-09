<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
    protected $table='mahasiswa'; // mendeklarasikan tabel mahasiswa
    protected $fillable=['nama','nim','alamat','pengguna_id'];
    protected $guarded=['id']; // mengabaikan atribut id pada saat melakikan insert/update

    public function pengguna(){ // fungsi dengan nama pengguna

    	return $this->belongsTo(pengguna::class); // memberikan nilai return dari fungsi belongsTo yang merelasikan mahasiswa dengan pengguna
    }

    public function jadwal_matakuliah(){ // fungsi dengan nama jadwal_matakuliah
    	return $this->hasMany(jadwal_matakuliah::class,'mahasiswa_id'); // memberika nilai return dari fungsi hasMany yang merelasikan mahasiswa dengan banyak jadwal_matakuliah dengan foreign key mahasiswa_id
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
    
}
