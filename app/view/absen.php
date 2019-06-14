<?php 
include_once 'app/module/absen/absen_data.php';
?>

<a href="<?= BASE_URL.'rekap_absen/kelas' ?>">Rekap Absen</a>

<?php
$query = mysqli_query($koneksi,"SELECT * FROM absen WHERE npm = '$_SESSION[id_user]' AND kode_mk = '$_SESSION[kode_mk]' AND kelas = '$_SESSION[kelas]' AND status = 'open' AND absen = '0'");
$open = mysqli_num_rows($query);

if ($_SESSION['status'] == "dosen"):?>

<div class="container">
	<form action="<?= BASE_URL?>app/module/absen/absen_proses.php" method="POST">
		<input type="submit" name="btn-absen" value="open">
		<input type="submit" name="btn-absen" value="done">
	</form>
	<?= $data['sudah_absen'].' / '.$data['jumlah_mhs'];?>
	<table>
		<tr>
			<th>NPM</th>
			<th>Nama</th>
			<th>Absen</th>
		</tr>
		<?php foreach($data['absen_mhs'] as $row): ?>
		<tr>
			<td><?= $row['npm'] ?></td>
			<td><?= $row['nama_mhs'] ?></td>
			<td><?= $row['absen'] ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php elseif ($open >=1) : ?>
<div class="container">
	<form action="<?= BASE_URL?>app/module/absen/absen_proses.php" method="POST">
		<input type="submit" name="btn-absen" value="absen">
	</form>
</div>
<?php endif;

