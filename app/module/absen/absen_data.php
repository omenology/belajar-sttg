<?php 

$id_user = $_SESSION["id_user"];
$kode_mk = $_SESSION['kode_mk'];
$kelas = $_SESSION['kelas'];

$absen_ke = "SELECT DISTINCT absen_ke FROM absen WHERE kode_mk = :kode_mk AND kelas = :kelas AND status = :status";

$db->query($absen_ke);
$db->bind("kode_mk",$kode_mk);
$db->bind("kelas",$kelas);
$db->bind("status","done");

$absen_ke = $db->rowCount()+1;

$query = "SELECT absen.npm, mahasiswa.nama_mhs, absen.absen  FROM `absen` JOIN mahasiswa ON absen.npm = mahasiswa.npm WHERE nidn = :id_user AND kode_mk = :kode_mk AND kelas = :kelas AND absen.absen = :absen AND status = :status AND absen_ke = :absen_ke";

$db->query($query);
$db->bind("id_user",$id_user);
$db->bind("kode_mk",$kode_mk);
$db->bind("kelas",$kelas);
$db->bind("absen",'1');
$db->bind("status","open");
$db->bind("absen_ke",$absen_ke);
$data['sudah_absen'] = $db->rowCount();

$query = "SELECT absen.npm, mahasiswa.nama_mhs, absen.absen  FROM `absen` JOIN mahasiswa ON absen.npm = mahasiswa.npm WHERE nidn = :id_user AND kode_mk = :kode_mk AND kelas = :kelas AND status = :status AND absen_ke = :absen_ke";

$db->query($query);
$db->bind("id_user",$id_user);
$db->bind("kode_mk",$kode_mk);
$db->bind("kelas",$kelas);
$db->bind("status","open");
$db->bind("absen_ke",$absen_ke);
$data['absen_mhs'] = $db->resultSet();
$data['jumlah_mhs'] = $db->rowCount();
var_dump($data['absen_mhs']);