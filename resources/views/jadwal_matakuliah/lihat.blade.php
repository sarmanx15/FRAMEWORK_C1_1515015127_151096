@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong>
			<a href="{{url('jadwal_matakuliah')}}">
				<i style="color: #5171D8" class="fa text-default fa-chevron-left"></i>
			</a>
			Detail Data Jadwal Mata Kuliah
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>ID Mahasiswa</td>
			<td>:</td>
			<td>{{$jadwal_matakuliah->mahasiswa_id}}</td>
		</tr>
		<tr>
			<td>ID Ruangan</td>
			<td>:</td>
			<td>{{$jadwal_matakuliah->ruangan_id}}</td>
		</tr>
		<tr>
			<td>ID Dosen Mata Kuliah</td>
			<td>:</td>
			<td>{{$jadwal_matakuliah->dosen_matakuliah_id}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwal_matakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-1"></td>
			<td>{{$jadwal_matakuliah->update_at}}</td>
		</tr>
	</table>
</div>
@stop