<?php
	
	include_once("../../function/config.php");

	session_start();

	$user_id=$_SESSION['id_user'];
	$level=$_SESSION['status'];
	$kode_mk=$_SESSION['kode_mk'];
	$kelas=$_SESSION['kelas'];
	$button = isset($_POST['button']) ? $_POST['button'] : $_GET['button'];

	var_dump($button);

	if($button=="Pindah Kelas"){

		$kelasTujuan=$_POST['kelas_tujuan'];
		$queryPindahKelas=mysqli_query($koneksi, "INSERT INTO pindah_kelas (kode_mk, kelas, npm) VALUES('$kode_mk', '$kelasTujuan', '$user_id')");
	}elseif($button=="Terima"){

		$npm=$_GET['npm'];
		$queryTerima=mysqli_query($koneksi, "UPDATE jadwal_mahasiswa SET kelas='$kelas' WHERE npm='$npm' AND kode_mk='$kode_mk'");
		$queryHapus=mysqli_query($koneksi, "DELETE FROM pindah_kelas WHERE npm='$npm'");

	}elseif($button=="Tolak"){

		$npm=$_GET['npm'];
		$queryHapus=mysqli_query($koneksi, "DELETE FROM pindah_kelas WHERE npm='$npm'");
	}

	header("location:".BASE_URL."setting");
?>