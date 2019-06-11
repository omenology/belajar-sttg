<?php
	include_once '../../function/config.php';
	include_once '../../function/Database.php';

	$db = new Database;

	session_start();
	$kd_mk = $_SESSION['kode_mk']; 
	$kelas = $_SESSION['kelas'];
	$id_user = $_SESSION['id_user'];
	$status = $_SESSION['status'];
	$pertemuanke = 1;

	if ($status == "dosen") {
		$query = "SELECT * FROM absen WHERE nidn = '$id_user' AND kode_mk = '$kd_mk' AND kelas = '$kelas' AND status = 'done'";

		$db->query($query);
		$pertemuanke += $db->rowCount();

		if ($_POST['btn-absen']=="done") {
			$query = "UPDATE absen SET status = 'done' WHERE nidn = :id_user AND kode_mk = :kd_mk AND kelas = :kelas AND absen_ke = :pertemuanke";
		}else{
			$query = "UPDATE absen SET status = 'open' WHERE nidn = :id_user AND kode_mk = :kd_mk AND kelas = :kelas AND absen_ke = :pertemuanke";
		}

		$db->query($query);
		$db->bind('pertemuanke',$pertemuanke);
	}else{
		$query = "UPDATE absen SET absen = '1' WHERE npm = :id_user AND kode_mk = :kd_mk AND kelas = :kelas AND status = :status";

		$db->query($query);
		$db->bind('status','open');
	}
	$db->bind('id_user',$id_user);
	$db->bind('kd_mk',$kd_mk);
	$db->bind('kelas',$kelas);
	$db->execute();

	header("location: ".BASE_URL."kelas/$kd_mk/$kelas");