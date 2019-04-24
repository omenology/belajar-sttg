<?php 
session_start();
var_dump($_SESSION);
$kdmk = $_SESSION['kode_mk'];
$kelas = $_SESSION['kelas'];

$query = mysqli_query($koneksi,"SELECT * FROM materi WHERE kode_mk = '$kdmk' AND kelas = '$kelas'");