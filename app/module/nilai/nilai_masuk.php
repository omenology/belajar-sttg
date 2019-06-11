<?php 

	include_once "../../function/config.php";

	$npm = $_POST["npm"];
	$kode_mk = $_POST["kode_mk"];
	$nilai_rata_tugas = $_POST["nilai_rata_tugas"];
	$absen = $_POST["absen"];
	$uts = $_POST["uts"];
	$uas = $_POST["uas"];

	$jadwal_mata_kuiah = mysqli_query($koneksi, "SELECT absen, tugas, uts, uas, d, c, b, a FROM jadwal_mata_kuiah WHERE kode_mk='$kode_mk'");

	$row = mysqli_fetch_assoc($jadwal_mata_kuiah);

	echo $row["absen"];

