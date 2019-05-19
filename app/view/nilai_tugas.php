<?php
	
	include_once "app/module/nilai_tugas/nilai_tugas.php";
if($npm) : ?>
<form action="<?php echo BASE_URL."app/module/nilai_tugas/nilai_tugas_masuk.php"?>" method="post">
	<input type="number" name="npm" value="<?= $npm ?>" readonly>
	<input type="text" name="kode_mk" value="<?= $kode_mkGet ?>" readonly>
	<input type="number" name="no_tugas" value="<?= $no_tugas ?>" readonly>
	<input type="number" name="nilai" value="<?= $nilai_tugas ?>" placeholder="Nilai Tugas">
	<input type="submit" name="kirim" value="<?= $button ?>">
</form>
<?php endif; ?>
<div class="container">
	<table class="centered">
		<thead  class=" centered  indigo lighten-2">
		<tr>
			<th>NPM</th>
			<th>Kode Mata Kuliah</th>
			<th>No Tugas</th>
			<th>File</th>
			<th>Nilai</th>
			<?php if($id_user && $status == "dosen") : ?>
			<th>Action</th>
			<?php endif; ?>
		</tr>
		</thead>
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
</div>