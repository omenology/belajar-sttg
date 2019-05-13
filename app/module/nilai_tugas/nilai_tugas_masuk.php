<?php 

	include_once "../../function/config.php";

	$npm = $_POST["npm"];
	$kode_mk = $_POST["kode_mk"];
	$no_tugas = $_POST["no_tugas"];
	$nilai = $_POST["nilai"];
	$button = $_POST["kirim"];

	if($button == "Kirim"){
		mysqli_query($koneksi, "INSERT INTO nilai_tugas VALUES ('$npm', '$kode_mk', '$no_tugas', '$nilai')");
	}elseif($button == "Update"){
		mysqli_query($koneksi, "UPDATE nilai_tugas SET npm='$npm',
													kode_mk='$kode_mk',
													no_tugas='$no_tugas',
													nilai_tugas='$nilai' WHERE npm='$npm' AND kode_mk='$kode_mk' AND no_tugas='$no_tugas'");
	}
	

	header("Location: ".BASE_URL."nilai_tugas");