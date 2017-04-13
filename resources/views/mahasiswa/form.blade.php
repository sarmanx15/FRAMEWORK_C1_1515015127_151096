<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholer'=>"Nama Mahasiswa"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nim">NIM</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','id'=>'nim','placehodler'=>"NIM Mahasiswa"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placehodler'=>"Alamat Mahasiswa"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placehodler'=>"Username"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placehodler'=>"Password"]) !!}
	</div>
</div>