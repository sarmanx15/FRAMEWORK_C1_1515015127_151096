@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong>
			<a href="{{url('dosen_matakuliah')}}>
				<i style="color: #5171D8" class="fa text-default fa-chevron-left"></i>
			</a>
			Detail Data Dosen Mata Kuliah
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>ID Dosen</td>
			<td>:</td>
			<td>{{$dosen_matakuliah->dosen_id}}</td>
		</tr>
		<tr>
			<td>ID Mata Kuliah</td>
			<td>:</td>
			<td>{{$dosen_matakuliah->matakuliah_id}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen_matakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-1"></td>
			<td>{{$dosen_matakuliah->update_at}}</td>
		</tr>
	</table>
</div>
@stop