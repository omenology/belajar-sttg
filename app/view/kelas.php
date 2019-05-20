<?php
	$kode_mk = $_SESSION['kode_mk'] = $url[1] ;
	$kelas = $_SESSION['kelas'] =  $url[2] ;
	var_dump($_SESSION);
?>
<div>

	<a href="<?php echo BASE_URL."setting"; ?>">Setting</a>
	<a href="<?php echo BASE_URL."materi"; ?>">Materi</a>
	<a href="<?php echo BASE_URL."absen"; ?>">Absen</a>
	<a href="<?php echo BASE_URL."tugas"; ?>">Tugas</a>
	<a href="<?php echo BASE_URL."nilai_tugas" ?>">NilaiTugas</a>
	<a href="<?php echo BASE_URL."nilai" ?>">Nilai</a>

</div>
