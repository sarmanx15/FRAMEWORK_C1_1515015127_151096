<div class="form-group">
	<label class="col-sm-2 control-label">ID Dosen</label>
	<div class="col-sm-10">
		{!! Form::text('dosen_id',null,['class'=>'form-control','placeholer'=>"ID Dosen"]) !!}

		<!-- {!! Form::select('dosen_id',$dosen->listDosenDanNim(),null,['class'=>'form-control','id=>dosen_id','placeholder'=>"Dosen"]) !!}	 -->
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">ID MataKulliah</label>
	<div class="col-sm-10">
		{!! Form::text('matakuliah_id',null,['class'=>'form-control','placeholer'=>"ID Mata Kuliah"]) !!}
		<!-- {!! Form::select('matakuliah_id',$matakuliah->lists('title','id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"Matakuliah"]) !!}	 -->
	</div>
</div>
