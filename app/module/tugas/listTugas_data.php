<?php
$kd_mk = $_SESSION['kode_mk'];
$kelas = $_SESSION['kelas'];
$npm = $_SESSION['id_user'];
var_dump($url[1]);

// $tugas = mysqli_query($koneksi,"SELECT tugas.judul, tugas.deskripsi, tugas.time_limit, tugas_mahasiswa.file_tugas FROM tugas JOIN mata_kuliah ON tugas.kode_mk=mata_kuliah.kode JOIN tugas_mahasiswa ON mata_kuliah.kode=tugas_mahasiswa.kode_mk WHERE tugas.kode_mk='$kd_mk' AND tugas.no_tugas='$url[1]' AND tugas.kelas='$kelas'");

$tugas = mysqli_query($koneksi,"SELECT judul, deskripsi, time_limit FROM tugas WHERE kode_mk='$kd_mk' AND no_tugas='$url[1]'");

$tugas_mahasiswa = mysqli_query($koneksi, "SELECT file_tugas FROM tugas_mahasiswa WHERE npm='$npm' AND kode_mk='$kd_mk' AND no_tugas='$url[1]'");
