<?php
	
	include_once("../../function/config.php");

	session_start();

	$user_id=$_SESSION['id_user'];
	$level=$_SESSION['status'];
	$kode_mk=$_SESSION['kode_mk'];
	$kelas=$_SESSION['kelas'];
	isset($_POST['button']) ? $button=$_POST['button'] : $button=$_GET['button'];

	if($button=="Pindah Kelas"){

		$kelasTujuan=$_POST['kelas'];
			$queryDataTujuan=mysqli_query($koneksi, "SELECT nidn FROM jadwal_dosen WHERE kode_mk='$kode_mk' AND kelas='$kelasTujuan'");
			$rowTujuan=mysqli_fetch_assoc($queryDataTujuan);
			$queryPindahKelas=mysqli_query($koneksi, "INSERT INTO pindah_kelas (nidn, kode_mk, kelas, npm) VALUES('$rowTujuan[nidn]', '$kode_mk', '$kelas', '$user_id')");
	}elseif($button=="Terima"){

		$npm=$_GET['npm']
		$queryTerima=mysqli_query($koneksi, "UPDATE jadwal_mahasiswa SET kelas='$kelas' WHERE npm='$npm' AND kode_mk='$kode_mk'");
		$queryHapus=mysqli_query($koneksi, "DELETE FROM pindah_kelas WHERE npm='$npm'");

	}elseif($button=="Tolak"){

		$npm=$_GET['npm']
		$queryHapus=mysqli_query($koneksi, "DELETE FROM pindah_kelas WHERE npm='$npm'");
	}


?>