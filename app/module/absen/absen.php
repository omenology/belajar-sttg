<?php
	include_once '../../function/helper.php';
	include_once '../../function/koneksi.php';

	session_start();
	$kd_mk = $_SESSION['kode_mk']; 
	$kelas = $_SESSION['kelas'];
	$id_user = $_SESSION['id_user'];
	$pertemuanke = 1;

	$query = mysqli_query($koneksi,"SELECT * FROM absen WHERE nidn = '$id_user' AND kode_mk = '$kd_mk' AND kelas = '$kelas' AND status = 'done'");
	foreach ($query as $row) {
		$pertemuanke = $row['absen_ke'];
		$pertemuanke+=1;
	}
	var_dump($pertemuanke);
	if ($_POST['btn-absen']=="done") {
		mysqli_query($koneksi,"UPDATE absen SET status = 'done' WHERE nidn = '$id_user' AND kode_mk = '$kd_mk' AND kelas = '$kelas' AND absen_ke = '$pertemuanke'");
	}else{
		mysqli_query($koneksi,"UPDATE absen SET status = 'open' WHERE nidn = '$id_user' AND kode_mk = '$kd_mk' AND kelas = '$kelas' AND absen_ke = '$pertemuanke'");
	}