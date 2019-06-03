<?php
$kd_mk = $_SESSION['kode_mk'];
$kelas = $_SESSION['kelas'];
$npm = $_SESSION['id_user'];

// $tugas = mysqli_query($koneksi,"SELECT judul, deskripsi, time_limit FROM tugas WHERE kode_mk='$kd_mk' AND no_tugas='$url[1]'");

//$tugas_mahasiswa = mysqli_query($koneksi, "SELECT file_tugas FROM tugas_mahasiswa WHERE npm='$npm' AND kode_mk='$kd_mk' AND no_tugas='$url[1]'");

$db->query("SELECT judul, deskripsi, time_limit FROM tugas WHERE kode_mk=:kdmk AND no_tugas=:no_tugas");
$db->bind("kdmk",$kd_mk);
$db->bind("no_tugas",$url[1]);
$tugas = $db->resultSet();

$db->query("SELECT file_tugas FROM tugas_mahasiswa WHERE npm=:npm AND kode_mk=:kdmk AND no_tugas=:no_tugas");
$db->bind("npm",$npm);
$db->bind("kdmk",$kd_mk);
$db->bind("no_tugas",$url[1]);
$tugas_mahasiswa = $db->resultSet();