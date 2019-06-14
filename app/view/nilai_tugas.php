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
				<?php if($id_user && $status == "dosen") : ?>
					<th>NPM</th>
					<th>Nama Mahasiswa</th>
					<th>Kode Mata Kuliah</th>
				<?php endif; ?>
					<th>No Tugas</th>
					<th>File</th>
					<th>Nilai</th>
				<?php if($id_user && $status == "dosen") : ?>
					<th>Action</th>
				<?php endif; ?>
			</tr>
		
	<?php if($id_user && $status == "dosen") { ?>

		<?php foreach($tugas as $row) { ?>
			<tr>
				<?php foreach($row as $rowTugas) { ?>
					<td><?= $rowTugas ?></td>
				<?php } ?>
			</tr>
		<?php } ?>

	<?php }elseif($id_user && $status == "mahasiswa") { ?>

		<?php foreach($tugasMhs as $row) { ?>
			<tr>
				<?php foreach($row as $rowTugas) { ?>
					<td><?= $rowTugas ?></td>
				<?php } ?>
			</tr>
		<?php } ?>

	<?php } ?>
		</thead>
	</table>
</div>