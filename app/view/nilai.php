<?php

	session_start();
	$kode_mk = $_SESSION["kode_mk"];

	$npm = isset($url[1]) ? $url[1] : false;
	$kd_mk = isset($url[2]) ? $url[2] : false;
	$jumNilTug = 0;

	// Nilai Absen
	$absen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$npm' AND kode_mk='$kode_mk' AND absen='1' AND status='done'");
	$jumAbsen = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$npm' AND kode_mk='$kode_mk'");
		
	$nilaiAbsen = @(mysqli_num_rows($absen) / mysqli_num_rows($jumAbsen) * 100);
	//

	// Nilai Tugas
	$queryNilaiTugas = mysqli_query($koneksi, "SELECT nilai_tugas  FROM nilai_tugas WHERE npm='$npm' AND kode_mk='$kd_mk'");

	foreach($queryNilaiTugas as $row){
		$jumNilTug += $row["nilai_tugas"];
	}
	$nilaiTugas = @($jumNilTug / mysqli_num_rows($queryNilaiTugas));
	// 

	$jadwal_Ms = mysqli_query($koneksi, "SELECT jadwal_mahasiswa.npm, jadwal_mahasiswa.kode_mk, mata_kuliah.nama_mk FROM jadwal_mahasiswa JOIN mata_kuliah ON jadwal_mahasiswa.kode_mk=mata_kuliah.kode WHERE kode_mk='$kode_mk'");

?>
<?php if($npm) : ?>
	<form action="<?php echo BASE_URL."app/module/nilai/nilai_masuk.php" ?>" method="post">
		<input type="number" name="npm" value="<?= $npm ?>" readonly>
		<input type="text" name="kode_mk" value="<?= $kd_mk ?>" readonly>
		<input type="number" name="nilai_rata_tugas" value="<?= $nilaiTugas ?>" readonly>
		<input type="number" name="absen" value="<?= $nilaiAbsen ?>" readonly>
		<input type="number" name="uts" placeholder="Nilai UTS">
		<input type="number" name="uas" placeholder="Nilai UAS">
		<input type="submit" name="kirim">
	</form>
<?php endif; ?>

<table>
	<tr>
		<th>NPM</th>
		<th>Kode Mata Kuliah</th>
		<th>Nama Matakuliah</th>
		<th>Action</th>
	</tr>
	<?php foreach($jadwal_Ms as $row) : ?>
		<tr>
			<td><?= $row["npm"] ?></td>
			<td><?= $row["kode_mk"] ?></td>
			<td><?= $row["nama_mk"] ?></td>
			<td><a href="<?php echo BASE_URL."nilai/$row[npm]/$row[kode_mk]"?>">Nilai</a></td>
		</tr>
	<?php endforeach; ?>
</table>