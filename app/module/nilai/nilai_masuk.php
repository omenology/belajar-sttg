<?php 

	include_once "../../function/config.php";
	session_start();
	$kelas=$_SESSION["kelas"];

	$npm = $_POST["npm"];
	$kode_mk = $_POST["kode_mk"];
	$nilai_rata_tugas = $_POST["nilai_rata_tugas"];
	$absen = $_POST["absen"];
	$uts = $_POST["uts"];
	$uas = $_POST["uas"];
	$button = $_POST["button"];

	$jadwal_mata_kuiah = mysqli_query($koneksi, "SELECT absen, tugas, uts, uas, d, c, b, a FROM jadwal_mata_kuliah WHERE kode_mk='$kode_mk' AND kelas='$kelas'");

	$row = mysqli_fetch_assoc($jadwal_mata_kuiah);

	$hitung_nilai_akhir = ($row["absen"] / 100 * $absen) + ($row["tugas"] / 100 * $nilai_rata_tugas) + ($row["uts"] / 100 * $uts) + ($row["uas"] / 100 * $uas);

	if($hitung_nilai_akhir < $row["d"]){
		$nilai_akhir="E";
	}elseif($hitung_nilai_akhir < $row["c"]){
		$nilai_akhir="D";
	}elseif($hitung_nilai_akhir < $row["b"]){
		$nilai_akhir="C";
	}elseif($hitung_nilai_akhir < $row["a"]){
		$nilai_akhir="B";
	}elseif($hitung_nilai_akhir >= $row["a"]){
		$nilai_akhir="A";
	}

	if($button == "tilai"){
		mysqli_query($koneksi, "INSERT INTO nilai VALUES ('$npm', '$kode_mk', '$nilai_rata_tugas', '$absen', '$uts', '$uas', '$nilai_akhir')");
	}elseif($button == "edit"){
		mysqli_query($koneksi, "UPDATE nilai SET nilai_rata_tugas='$nilai_rata_tugas', absen='$absen', uts='$uts', uas='$uas', akhir='$nilai_akhir'");
	}

