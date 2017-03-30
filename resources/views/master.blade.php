<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('page_title','Halaman Awal')| Laboraturium Pemrograman FW</title>
		<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
		<style type="text/css">
			body{
				padding-top: 70px;
				padding-bottom: 70ox;
			}
			.starter-template{
				padding: 40px 15px;
				text-align: center;
			}
			.form-horizontal{
				padding: 15px 10px;
			}
			footer{
				padding-top:15px;
				text-align: right;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="{{url('/')}}" style="color: #FE3C00">
					<i class="fa fa-fire" style="color:#FF0000"></i>
					Pemrograman Framework
					<i class="fa fa-fire" style="color:#FF0000"></i>
					</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown active">
							<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user" style="color:#535353"></i>
							 Mahasiswa
							<span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="dLabel">
								<li><a href="{{url('mahasiswa')}}">
								<i class="fa fa-list" style="color:#535353"></i> Data Mahasiswa</a></li>
								<li class="divider"></li>
								<li><a href="{{url('jadwal_matakuliah')}}">
								<i class="fa fa-calendar" style="color:#535353"></i> Jadwal Mata Kuliah</a></li>
							</ul>
						</li>
						<li class="dropdown active">
							<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user" style="color:#535353"></i> Dosen
							<span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="dLabel">
								<li>
									<a href="{{url('dosen')}}">
									<i class="fa fa-list" style="color:#535353"></i> Data Dosen</a>
								</li>
								<li class="divider"></li>
								<li><a href="{{url('dosen_matakuliah')}}">
								<i class="fa fa-calendar" style="color:#535353"></i> Jadwal Dosen Mengajar</a></li>
							</ul>
						</li>
						<li class="dropdown active">
							<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-gear" style="color:#535353"></i> Pengaturan
							<span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="dLabel">
								<li >

									<a href="{{url('pengguna')}}">
									<i class="fa fa-user" style="color:#535353"></i> Pengguna</a>
								</li>
								<li class="divider"></li>
								<li >
									<a href="{{url('ruangan')}}">
									<i class="fa fa-square" style="color:#535353"></i>  Ruangan</a>
								</li>
								<li class="divider"></li>
								<li >
									<a href="{{url('matakuliah')}}">
									<i class="fa fa-book" style="color:#535353"></i>  Matakuliah</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!--.nav-collapse-->
			</div>
		</nav>
		<div class="clearfix"></div>
		<div class="container">
			@if (Session::has('informasi'))
			<div class="alert alert-info">
				<strong>Informasi :</strong>
				{{Session::get('informasi')}}
			</div>
			@endif
			@yield('container')
		</div>
		<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
			<!-- Please dont delete this -->
			Modified by <a href="https://www.instagram.com/xmsn_/"><span><i class="fa fa-instagram" style="color:#3452D2"></i> Muhammad Sarman Noorlah</span></a>
			<!-- Please dont delete this-->
		</footer>
		</nav>
		<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript">
			$(function(){
				$('[data-toggle="tooltip"]').tooltip()
			});
		</script>
	</body>
</html>