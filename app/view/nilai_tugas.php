<?php 
	
	include_once "app/module/nilai_tugas/nilai_tugas.php";

if($npm) : ?>
	<form action="<?php echo BASE_URL."app/module/nilai_tugas_masuk/nilai_tugas.php"?>" method="post">
		<input type="number" name="npm" value="<?= $npm ?>" readonly>
		<input type="text" name="kode_mk" value="<?= $kode_mkGet ?>" readonly>
		<input type="number" name="no_tugas" value="<?= $no_tugas ?>" readonly>
		<input type="number" name="nilai" value="<?= $nilai_tugas ?>" placeholder="Nilai Tugas">
		<input type="submit" name="kirim" value="Nilai Tugas">
	</form>
<?php endif; ?>

<table>
	<tr>
		<th>NPM</th>
		<th>Kode Mata Kuliah</th>
		<th>No Tugas</th>
		<th>File</th>
		<th>Nilai</th>
		<th>Action</th>
	</tr>
	<?php foreach($queryTugas as $rowTugas) : ?>
		<tr>
			<td><?= $rowTugas["npm"] ?></td>
			<td><?= $rowTugas["kode_mk"] ?></td>
			<td><?= $rowTugas["no_tugas"] ?></td>
			<td><?= $rowTugas["file"] ?></td>
			<?php 
				queryNilai( $rowTugas["npm"], $rowTugas["kode_mk"], $rowTugas["no_tugas"] );
			?>
		</tr>
	<?php endforeach; ?>
</table>