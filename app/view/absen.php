<?php
session_start(); 

$query = mysqli_query($koneksi,"SELECT * FROM absen WHERE npm = '$_SESSION[id_user]' AND kode_mk = '$_SESSION[kode_mk]' AND kelas = '$_SESSION[kelas]' AND status = 'open' AND absen = '0'");
$open = mysqli_num_rows($query);
if ($_SESSION['status'] == "dosen"):?> 
<div class="container">
	<form action="<?php echo BASE_URL."app/module/absen/absen.php"; ?>" method="POST">
		<input type="submit" name="btn-absen" value="open">
		<input type="submit" name="btn-absen" value="done">
	</form>
</div>
<?php elseif ($open >=1) : ?>
<div class="container">
	<form action="<?php echo BASE_URL."app/module/absen/absen.php"; ?>" method="POST">
		<input type="submit" name="btn-absen" value="absen">
	</form>
</div>
<?php endif; 
var_dump($_SESSION['status']);?>