<?php
	include_once '../../function/helper.php';
	include_once '../../function/koneksi.php';

	$kd_mk = $_POST['kd-mk']; // menggunakan seassion 
	$kelas = $_POST['kelas']; // menggunakan seassion
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$time_post = $_POST['time-post'];
	$time_limit = $_POST['time-limit'];

	mysqli_query($koneksi,"INSERT INTO tugas(kode_mk, kelas, no_tugas, judul, deskripsi, time_post, time_limit) VALUES ('$kd_mk','$kelas',1,'$judul','$deskripsi','$time_post','$time_limit')");

	// var_dump($_POST);