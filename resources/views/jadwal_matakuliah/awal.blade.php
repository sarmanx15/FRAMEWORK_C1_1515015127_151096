@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mata Kuliah</strong>
		<a href="{{url('jadwal_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i> Jadwal Mata Kuliah
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswa</th>
				<th>NIM Mahasiswa</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
				<?php $x=1; ?>
				@foreach ($semuaJadwalMatakuliah as $jadwal)
				<tr>
					<td>{{$x++}}</td>
					<td>{{$jadwal->mahasiswa->nama or 'Nama Mahasiswa Kosong'}}</td>
					<td>{{$jadwal->mahasiswa->nim or 'Nim Kosong'}}</td>
					<td>{{$jadwal->dosen_matakuliah->title or 'Kuliah Kosong'}}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{url('jadwal_matakuliah/edit/'.$jadwal->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
								<i class="fa fa-pencil"></i>
							</a>
							<a href="{{url('jadwal_matakuliah/lihat/'.$jadwal->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i>
							</a>
							<a href="{{url('jadwal_Matakuliah/hapus/'.$jadwal->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-remove"></i>
							</a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		
	</table>
</div>
@stop