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
			<th>Kode Mata Kuliah</th>
		<?php endif; ?>
			<th>No Tugas</th>
			<th>File</th>
			<th>Nilai</th>
		<?php if($id_user && $status == "dosen") : ?>
			<th>Action</th>
		<?php endif; ?>
		</tr>
		</thead>
	<?php if($status == "dosen") : ?>
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
	<?php elseif($status == "mahasiswa") : ?>
		<?php foreach($tugasMhs as $row) : ?>
			<tr>
				<td><?= $row["no_tugas"] ?></td>
				<td><?= $row["file"] ?></td>
				<?php  
					$nilaiTugas = mysqli_query($koneksi, "SELECT nilai_tugas FROM nilai_tugas WHERE npm='$row[npm]' AND kode_mk='$row[kode_mk]' AND no_tugas='$row[no_tugas]'");
					$rowNilai = mysqli_fetch_assoc($nilaiTugas);
				?>
				<td><?= $rowNilai["nilai_tugas"] ?></td>
			</tr>
		<?php endforeach; ?>
	<?php endif; ?>
	</table>
</div>