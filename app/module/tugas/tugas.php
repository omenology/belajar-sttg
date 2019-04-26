<?php
	include_once '../../function/helper.php';
	include_once '../../function/koneksi.php';
	session_start();

	$kd_mk = $_SESSION['kode_mk']; 
	$kelas = $_SESSION['kelas']; 
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$time_post = $_POST['time-post'];
	$time_limit = $_POST['time-limit'];
	$no_tugas = 1;

	$query = mysqli_query($koneksi,"SELECT * FROM tugas WHERE kode_mk = '$kd_mk' AND kelas = '$kelas'");
	foreach ($query as $row) {
		$no_tugas = $row['no_tugas'];
		$no_tugas += 1;
	}

	mysqli_query($koneksi,"INSERT INTO tugas(kode_mk, kelas, no_tugas, judul, deskripsi, time_post, time_limit) VALUES ('$kd_mk','$kelas','$no_tugas','$judul','$deskripsi','$time_post','$time_limit')");
