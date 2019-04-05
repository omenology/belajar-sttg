<?php
	
	include_once("../../function/koneksi.php");
	include_once("../../function/helper.php");

	session_start();

	$user_id=$_SESSION['id_user'];
	$level=$_SESSION['status'];
	$kode_mk=$_POST['kode_mk'];
	$kelas=$_POST['kelas'];
	$button=$_POST['button'];

	if($button=="Update Persentase Nilai"){

		$absen=$_POST['absen'];
		$tugas=$_POST['tugas'];
		$uts=$_POST['uts'];
		$uas=$_POST['uas'];

		if($absen+$tugas+$uts+$uas!=100){

			echo "PERSENTASE MAH TOTALNA 100 ATUH GOBLOK";
		}else{

			$queryPersentase=mysqli_query($koneksi, "UPDATE jadwal_mata_kuliah SET absen='$absen', tugas='$tugas', uts='$uts', uas='$uas' WHERE kode_mk='$kode_mk' AND kelas='$kelas'");
		}
	}elseif($button=="Update Range Nilai"){

		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];

		if($a<$b||$a<$c||$a<$d||$b<$c||$b<$d||$c<$d){

			echo "BALEG ANJING NGEUSIAN TEH";
		}else{

			$queryRange=mysqli_query($koneksi, "UPDATE jadwal_mata_kuliah SET a='$a', b='$b', c='$c', d='$d' WHERE kode_mk='$kode_mk' AND kelas='$kelas'");
		}
	}


?>