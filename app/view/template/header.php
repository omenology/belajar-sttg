<!DOCTYPE html>
<html>
	<head>
		<title>Belajar STTG</title>
		<link rel="icon" href="<?=BASE_URL.'img/Logo-STTG.png'?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="<?=BASE_URL.'css/materialize/materialize.min.css'?>" >
		<link rel="stylesheet" type="text/css" href="<?= BASE_URL.'css/style.css'?>">
		
	</head>
	<body>
		<?php if(isset($_SESSION['status'])) :  ?>
		<!-- navbar -->
		<div class="navbar-fixed">
			<nav class="nav-wrapper blue darken-3 ">
				<ul>
					<li>
						<a href="" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="color: white">menu</i></a>
					</li>
				</ul>
			</nav>
		</div>
		<!-- sidebar -->
		<ul id="slide-out" class="sidenav">
			<li>
				<div class="user-view">
					<div class="background">
						<img class="activator" src="<?=BASE_URL.'img/bg-login.png'?>">
					</div>
					<a href="#user"><img class="circle" src="<?=BASE_URL.'img/user-icon.png'?>"></a>
					<a href="#name"><span class="white-text name">Nama Mahasiswa</span></a>
					<a href="#email"><span class="white-text email">EmailMahasiswak@gmail.com</span></a>
				</div>
			</li>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header"><i class="material-icons">library_books</i>Daftar Tugas</div>
					<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				</li>
				<li>
					<a href="<?= BASE_URL.'rekap_absen/depan'?>" class="collapsible-header sisi">
						<i class="material-icons icsisi">assignment</i>
					Rekap Absen</a>
				</li>
			</ul>
			<li>
				
			</li>
			<li><div class="divider"></div></li>
			<li><a class="subheader">Subheader</a></li>
			<li>
				<a href="<?= BASE_URL.'app/function/logout.php'?>">Logout</a>
			</li>
		</ul>
		<?php endif; ?>