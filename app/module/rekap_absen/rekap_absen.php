<?php

	$id_user = $_SESSION["id_user"];
	$status = $_SESSION["status"];

	$rekap = $url[1];

if($rekap == "kelas"){
		$kode_mk = $_SESSION["kode_mk"];
		// // $queryMhs = mysqli_query($koneksi, "SELECT DISTINCT absen.kode_mk, absen.kelas, mata_kuliah.nama_mk FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.npm='$id_user' AND kode_mk='$kode_mk'");
		// $queryMhs = mysqli_query($koneksi, "SELECT DISTINCT kode_mk FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk'");
		// $absenMhs = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND status='done'");
		
		$queryDosen = mysqli_query($koneksi, "SELECT DISTINCT absen.npm, absen.kode_mk, absen.kelas, mahasiswa.nama_mhs, mata_kuliah.nama_mk FROM absen JOIN mahasiswa ON absen.npm=mahasiswa.npm JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.nidn='$id_user' AND absen.kode_mk='$kode_mk'");
		
		foreach($queryDosen as $row){
			var_dump($row["npm"]);
			$absenDosen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE nidn='$id_user' AND kode_mk='$kode_mk' AND status='done' AND npm='$row[npm]'");
		}

		function persenAbsen($kode_mk){
			global $koneksi;
			global $id_user;

			$absen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND absen='1' AND status='done'");
			$jumAbsen = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk'");
			echo $nilaiAbsen = @(mysqli_num_rows($absen) / mysqli_num_rows($jumAbsen) * 100);
		}

		function persenAbsenDosen($npm, $kode_mk){
			global $koneksi;

			$absen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$npm' AND kode_mk='$kode_mk' AND absen='1' AND status='done'");
			$jumAbsen = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$npm' AND kode_mk='$kode_mk'");
			echo $nilaiAbsen = @(mysqli_num_rows($absen) / mysqli_num_rows($jumAbsen) * 100);
		}

	}elseif($rekap == "depan"){
		$queryMhs = mysqli_query($koneksi, "SELECT DISTINCT absen.kode_mk, absen.kelas, mata_kuliah.nama_mk FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.npm='$id_user'");
		
		function absMhs($kode_mk){
			global $koneksi;
			global $id_user;

			$absenMhs = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND status='done'");

			foreach($absenMhs as $row){
				echo $row["absen"];
			}

		}

		function persenAbsen($kode_mk){
			global $koneksi;
			global $id_user;

			$absen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND absen='1' AND status='done'");
			$jumAbsen = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk'");
			echo $nilaiAbsen = @(mysqli_num_rows($absen) / mysqli_num_rows($jumAbsen) * 100);
		}

		function persenAbsenDosen($npm, $kode_mk){
			global $koneksi;

			$absen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$npm' AND kode_mk='$kode_mk' AND absen='1' AND status='done'");
			$jumAbsen = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$npm' AND kode_mk='$kode_mk'");
			echo $nilaiAbsen = @(mysqli_num_rows($absen) / mysqli_num_rows($jumAbsen) * 100);
		}
		
		$queryDosen = mysqli_query($koneksi, "SELECT DISTINCT absen.npm, absen.kode_mk, absen.kelas, mahasiswa.nama_mhs, mata_kuliah.nama_mk FROM absen JOIN mahasiswa ON absen.npm=mahasiswa.npm JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.nidn='$id_user'");
		
		function absDosen( $npm, $kode_mk ){
			global $koneksi;
			global $id_user;

			$absenDosen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE nidn='$id_user' AND npm='$npm' AND kode_mk='$kode_mk' AND status='done'");

			foreach($absenDosen as $row){
				echo $row["absen"];
			}

		}

	}