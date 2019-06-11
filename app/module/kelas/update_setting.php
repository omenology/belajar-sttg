<?php
	
	include_once("../../function/config.php");

	session_start();

	$user_id=$_SESSION['id_user'];
	$level=$_SESSION['status'];
	$kode_mk=$_SESSION['kode_mk'];
	$kelas=$_SESSION['kelas'];
	$button=$_POST['button'];

	if($button=="Update Persentase Nilai"){

		$absen=$_POST['absen'];
		$tugas=$_POST['tugas'];
		$uts=$_POST['uts'];
		$uas=$_POST['uas'];

		if($absen+$tugas+$uts+$uas!=100){

			header("location:".BASE_URL."setting" );
		}else{

			$queryPersentase=mysqli_query($koneksi, "UPDATE jadwal_mata_kuliah SET absen='$absen', tugas='$tugas', uts='$uts', uas='$uas' WHERE kode_mk='$kode_mk' AND kelas='$kelas'");
			header("location:".BASE_URL."setting" );
		}
	}elseif($button=="Update Range Nilai"){

		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];

		if($a>100||$a<$b||$a<$c||$a<$d||$b<$c||$b<$d||$c<$d){

			header("location:".BASE_URL."setting" );
		}else{

			$queryRange=mysqli_query($koneksi, "UPDATE jadwal_mata_kuliah SET a='$a', b='$b', c='$c', d='$d' WHERE kode_mk='$kode_mk' AND kelas='$kelas'");
			header("location:".BASE_URL."setting" );
		}


?>