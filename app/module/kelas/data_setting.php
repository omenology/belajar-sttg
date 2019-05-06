<?php 
	
	session_start();

	$user_id = $_SESSION['id_user'];
	$level = $_SESSION['status'];
	$kode_mk = $_SESSION['kode_mk'];
	$kelas = $_SESSION['kelas'];
	

	$queryKelas=mysqli_query($koneksi, "SELECT * FROM jadwal_mata_kuliah WHERE kode_mk='$kode_mk' AND kelas='$kelas'");
	$row=mysqli_fetch_assoc($queryKelas);