<?php 

	include_once "app/module/nilai/nilai.php";

if($button) : ?>
	<form action="<?php echo BASE_URL."app/module/nilai/nilai_masuk.php" ?>" method="post">
		<input type="number" name="npm" value="<?= $npm ?>" readonly>
		<input type="text" name="kode_mk" value="<?= $kd_mk ?>" readonly>
		<input type="number" name="nilai_rata_tugas" value="<?php if($button == "tilai"){ echo $nilaiTugas; }elseif($button == "edit"){ echo $nilai_rata_tugas; } ?>">
		<input type="number" name="absen" value="<?php if($button == "tilai"){ echo $nilaiAbsen; }elseif($button == "edit"){ echo $nilai_rata_absen; } ?>">
		<input type="number" name="uts" value="<?= $uts ?>" placeholder="Nilai UTS">
		<input type="number" name="uas" value="<?= $uas ?>" placeholder="Nilai UAS">
		<input type="submit" name="<?= $button ?>" value="<?= $button ?>">
	</form>
<?php endif; ?>

<table>
	<tr>
	<?php if($status == "dosen") : ?>
		<th>NPM</th>
		<th>Nama Mahasiswa</th>
		<th>Nama Matakuliah</th>
	<?php endif; ?>
		<th>Nilai Rata Tugas</th>
		<th>Absen</th>
		<th>UTS</th>
		<th>UAS</th>
		<th>Akhir</th>
	<?php if($status == "dosen") : ?>
		<th>Action</th>
	<?php endif; ?>
	</tr>
<?php if($status == "dosen") : ?>
	<?php foreach($jadwal_Ms as $row) : ?>
		<tr>
			<td><?= $row["npm"] ?></td>
			<td><?= $row["nama_mhs"] ?></td>
			<td><?= $row["nama_mk"] ?></td>

			<?php 
				$nilai = mysqli_query($koneksi, "SELECT npm, kode_mk, nilai_rata_tugas, absen, uts, uas, akhir FROM nilai WHERE npm='$row[npm]' AND kode_mk='$row[kode_mk]'");

				$rowNilai = mysqli_fetch_assoc($nilai);
			?>
			<?php if(mysqli_num_rows($nilai) == 0) : ?>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td><a href="<?php echo BASE_URL."nilai/tilai/$row[npm]/$row[kode_mk]"?>">Nilai</a></td>
			<?php else : ?>
				<td><?= $rowNilai["nilai_rata_tugas"] ?></td>
				<td><?= $rowNilai["absen"] ?></td>
				<td><?= $rowNilai["uts"] ?></td>
				<td><?= $rowNilai["uas"] ?></td>
				<td><?= $rowNilai["akhir"] ?></td>
				<td><a href="<?php echo BASE_URL."nilai/edit/$rowNilai[npm]/$rowNilai[kode_mk]/$rowNilai[nilai_rata_tugas]/$rowNilai[absen]/$rowNilai[uts]/$rowNilai[uas]"?>">Edit</a></td>
			<?php endif; ?>

		</tr>
	<?php endforeach; ?>
<?php elseif($status == "mahasiswa") : ?>
	<?php foreach($nilaiMhs as $row) : ?>
		<tr>
			<td><?= $row["nilai_rata_tugas"] ?></td>
			<td><?= $row["absen"] ?></td>
			<td><?= $row["uts"] ?></td>
			<td><?= $row["uas"] ?></td>
			<td><?= $row["akhir"] ?></td>
		</tr>
	<?php endforeach; ?>
<?php endif; ?>
</table>