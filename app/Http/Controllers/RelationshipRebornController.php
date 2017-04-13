<?php 
namespace App\Http\Controllers;
use App\Dosen;

class RelationshipRebornController extends Controller{
	public function ujihas(){
		return dosen::has('dosen_matakuliah')->get();
	}

	public function ujiDoesntHave(){
		return dosen::doesntHave('dosen_matakuliah')->get();
	}
}