<?php 

	include_once "../../function/config.php";

	$npm = $_POST["npm"];
	$kode_mk = $_POST["kode_mk"];
	$no_tugas = $_POST["no_tugas"];
	$nilai = $_POST["nilai"];

	mysqli_query($koneksi, "INSERT INTO nilai_tugas VALUES ('$npm', '$kode_mk', '$no_tugas', '$nilai')");

	header("Location: ".BASE_URL."nilai_tugas");