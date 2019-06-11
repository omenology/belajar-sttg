<?php
	
	$id_user = $_SESSION["id_user"];
	$kode_mk = $_SESSION["kode_mk"];
	$status = $_SESSION["status"];
	$kelas = $_SESSION["kelas"];

	$button =isset($url[1]) ? $url[1] : false;
	$npm = isset($url[2]) ? $url[2] : false;
	$kd_mk = isset($url[3]) ? $url[3] : false;
	$nilai_rata_tugas = isset($url[4]) ? $url[4] : false;
	$nilai_rata_absen = isset($url[5]) ? $url[5] : false;
	$uts = isset($url[6]) ? $url[6] : false;
	$uas = isset($url[7]) ? $url[7] : false;
	$jumNilTug = 0;

	// Nilai Absen
	$absen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$npm' AND kode_mk='$kode_mk' AND absen='1' AND status='done'");
	$jumAbsen = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$npm' AND kode_mk='$kode_mk'");
		
	$nilaiAbsen = @(mysqli_num_rows($absen) / mysqli_num_rows($jumAbsen) * 100);
	//

	// Nilai Tugas
	$queryNilaiTugas = mysqli_query($koneksi, "SELECT nilai_tugas  FROM nilai_tugas WHERE npm='$npm' AND kode_mk='$kd_mk'");

	foreach($queryNilaiTugas as $row){
		$jumNilTug += $row["nilai_tugas"];
	}
	$nilaiTugas = @($jumNilTug / mysqli_num_rows($queryNilaiTugas));
	// 

	$jadwal_Ms = mysqli_query($koneksi, "SELECT jadwal_mahasiswa.npm, jadwal_mahasiswa.kode_mk, mata_kuliah.nama_mk, mahasiswa.nama_mhs FROM jadwal_mahasiswa JOIN mata_kuliah ON jadwal_mahasiswa.kode_mk=mata_kuliah.kode JOIN mahasiswa ON jadwal_mahasiswa.npm=mahasiswa.npm WHERE kode_mk='$kode_mk' AND kelas='$kelas'");

	$nilaiMhs = mysqli_query($koneksi, "SELECT nilai_rata_tugas, absen, uts, uas, akhir FROM nilai WHERE npm='$id_user' AND kode_mk='$kode_mk'");

	var_dump($kelas);

?>