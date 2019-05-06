<a href="<?= BASE_URL.'/rekap_absen' ?>">rekap</a>

<?php
session_start();

$query = mysqli_query($koneksi,"SELECT * FROM absen WHERE npm = '$_SESSION[id_user]' AND kode_mk = '$_SESSION[kode_mk]' AND kelas = '$_SESSION[kelas]' AND status = 'open' AND absen = '0'");
$open = mysqli_num_rows($query);

var_dump($_SESSION['id_user']);

if ($_SESSION['status'] == "dosen"):?>

<div class="container">
	<form action="<?= BASE_URL?>app/module/absen/absen.php" method="GET">
		<input type="submit" name="btn-absen" value="open">
		<input type="submit" name="btn-absen" value="done">
	</form>
</div>
<?php elseif ($open >=1) : ?>
<div class="container">
	<form action="<?= BASE_URL?>app/module/absen/absen.php" method="POST">
		<input type="submit" name="btn-absen" value="absen">
	</form>
</div>
<?php endif;

var_dump($_SESSION['status']);?>