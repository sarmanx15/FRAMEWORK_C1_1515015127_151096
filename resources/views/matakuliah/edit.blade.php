@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong>
			<a href="{{url('matakuliah')}}">
				<i class="fa text-default fa-chevron-left"></i>
			</a>Perbarui Data Mata Kuliah
		</strong>
	</div>
	{!! Form::model($matakuliah,['url'=>'matakuliah/edit/'.$matakuliah->id,'class'=>'form-horizontal']) !!}
	@include('matakuliah.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info">
			<i class="fa fa-save"></i>Perbaharui
		</button>
		<button type="reset" class="btn btn-danger">
			<i class="fa fa-undo">Ulangi</i>
		</button>
	</div>
	{!! Form::close()!!}
</div>
@stop