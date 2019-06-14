<?php

	$id_user = $_SESSION["id_user"];
	$level = $_SESSION["status"];

	$rekap = $url[1];
	$no=1;

	if($rekap == "kelas"){
		$kode_mk = $_SESSION["kode_mk"];
		$kelas = $_SESSION["kelas"];

		if($level == "mahasiswa"){
				$queryAbsen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND kelas='$kelas' AND absen='1' AND status='done'");
				$queryAbsenKeMhs = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND kelas='$kelas' AND status='done'");
				
				$persenAbsenMhs = @(mysqli_num_rows($queryAbsen) / mysqli_num_rows($queryAbsenKeMhs) * 100);
		}elseif($level == "dosen"){
			$queryDataAbsen = mysqli_query($koneksi, "SELECT DISTINCT absen.npm, absen.kode_mk, absen.kelas, mahasiswa.nama_mhs, mata_kuliah.nama_mk FROM absen JOIN mahasiswa ON absen.npm=mahasiswa.npm JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.nidn='$id_user' AND absen.kode_mk='$kode_mk' AND absen.kelas='$kelas' AND mata_kuliah.kode='$kode_mk'");
		}
	}elseif($rekap == "depan"){
		if($level == "dosen"){
			$queryDataAbsen = mysqli_query($koneksi, "SELECT DISTINCT absen.npm, absen.kode_mk, absen.kelas, mahasiswa.nama_mhs, mata_kuliah.nama_mk FROM absen JOIN mahasiswa ON absen.npm=mahasiswa.npm JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.nidn='$id_user'");
		}elseif($level == "mahasiswa"){
			$queryDataAbsenMhs = mysqli_query($koneksi, "SELECT DISTINCT absen.kode_mk , absen.kelas, absen.npm,mata_kuliah.nama_mk FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE npm='$id_user'");	
		}
	}