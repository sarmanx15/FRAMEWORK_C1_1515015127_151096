<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholer'=>"Nama Mahasiswa"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">NIM</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','placehodler'=>"NIM Mahasiswa"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placehodler'=>"Alamat Mahasiswa"]) !!}
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