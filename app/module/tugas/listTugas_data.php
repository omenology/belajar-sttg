<?php
session_start();
var_dump($_SESSION);
$npm = $_SESSION['id_user'];
$kd_mk = $_SESSION['kode_mk'];
//$no_tgs = $_SESSION['no_tugas'];
//$kelas = $_SESSION['kelas'];

$tugas = mysqli_query($koneksi,"SELECT * FROM tugas WHERE npm = '$npm' AND kode_mk = '$kd_mk'");	