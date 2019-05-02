<?php 
	session_start();
	$kode_mk = $_SESSION['kode_mk'] = $_GET['kdmk'];
	$kelas = $_SESSION['kelas'] = $_GET['kelas'];
?>

<div>
	<a href="<?php echo BASE_URL."index.php?page=setting"; ?>">Setting</a>
	<a href="<?php echo BASE_URL."index.php?page=materi"; ?>">Materi</a>
	<a href="<?php echo BASE_URL."index.php?page=absen"; ?>">Absen</a>
	<a href="<?php echo BASE_URL."index.php?page=tugas"; ?>">Tugas</a>

</div>
<?php?>