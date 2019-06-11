<?php 
var_dump($_SESSION);
$kdmk = $_SESSION['kode_mk'];
$kelas = $_SESSION['kelas'];

$query = "SELECT * FROM materi WHERE kode_mk = :kdmk AND kelas = :kelas";

$db->query($query);
$db->bind('kdmk',$kdmk);
$db->bind('kelas',$kelas);
$data = $db->resultSet();
