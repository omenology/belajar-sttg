<?php 
$kode_mk = $_SESSION['kode_mk'];

$db->query("SELECT no_tugas, judul, time_limit FROM tugas WHERE kode_mk=:kdmk");
$db->bind("kdmk",$kode_mk);
$tugas = $db->resultSet();

?>