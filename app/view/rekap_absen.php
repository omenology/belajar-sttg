<?php

	session_start();
	$id_user = $_SESSION["id_user"];
	$status = $_SESSION["status"];
	$rekap = $url[1];
	var_dump($id_user);

	if($rekap == "kelas"){
		$kode_mk = $_SESSION["kode_mk"];
		$queryMhs = mysqli_query($koneksi, "SELECT DISTINCT absen.kode_mk, absen.kelas, mata_kuliah.nama_mk FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.npm='$id_user' AND kode_mk='$kode_mk'");
		$absenMhs = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND status='done'");
		
		$queryDosen = mysqli_query($koneksi, "SELECT DISTINCT absen.npm, absen.kode_mk, absen.kelas, mahasiswa.nama_mhs, mata_kuliah.nama_mk FROM absen JOIN mahasiswa ON absen.npm=mahasiswa.npm JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.nidn='$id_user' AND absen.kode_mk='$kode_mk'");
		
		foreach($queryDosen as $row){
			var_dump($row["npm"]);
			$absenDosen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE nidn='$id_user' AND kode_mk='$kode_mk' AND status='done' AND npm='$row[npm]'");
		}
	}elseif($rekap == "depan"){
		// $queryMhs = mysqli_query($koneksi, "SELECT DISTINCT absen.kode_mk, absen.kelas, mata_kuliah.nama_mk FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.npm='$id_user'");
		// foreach($queryMhs as $row){
		// 	var_dump($row["kode_mk"]);
		// 	$absenMhs = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$row[kode_mk]' AND status='done'");
		// 	foreach($absenMhs as $rowAbsen){
		// 		var_dump($rowAbsen["absen"]);
		// 	}
		// }
		$kdmk= mysqli_query($koneksi,"SELECT DISTINCT kode_mk FROM absen WHERE npm='$id_user'");
		foreach ($kdmk as $row) {
			$kd[]=$row['kode_mk'];
		}
		$i=0;
		foreach ($kd as $kode) {
			$absen = mysqli_query($koneksi,"SELECT * FROM absen WHERE npm='$id_user' AND kode_mk='$kode' AND status ='done'")
			$i++;
		}

	}
	var_dump($kd);
	
	$no=1;
?>

<?php if($id_user && $status == "mahasiswa") : ?>

	<table>
			<tr>
				<th>No</th>
				<th>Kode</th>
				<th>Mata Kuliah</th>
				<th>Kelas</th>
				<th>Absen</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th>
					<?php 
						for($i=1; $i<=14; $i++){
							echo $i;
						}
					?>
				</th>
			</tr>
		<?php foreach($queryMhs as $rowMhs) : ?>
			
			<tr>
					<td><?= $no ?></td>
					<td><?= $rowMhs["kode_mk"] ?></td>
					<td><?= $rowMhs["nama_mk"] ?></td>
					<td><?= $rowMhs["kelas"] ?></td>
					<td>
						<?php
							var_dump($absenMhs);
							foreach($absenMhs as $rowAbsen){
								
							}
						?>
					</td>
			</tr>
			<?php $no++;
		endforeach; ?>
	</table>
<?php elseif($id_user && $status == "dosen") : ?>
	<table>
			<tr>
				<th>No</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Kode</th>
				<th>Mata Kuliah</th>
				<th>Kelas</th>
				<th>Absen</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<th>
					<?php 
						for($i=1; $i<=14; $i++){
							echo $i;
						}
					?>
				</th>
			</tr>
		<?php foreach($queryDosen as $rowDosen) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $rowDosen["npm"] ?></td>
				<td><?= $rowDosen["nama_mhs"] ?></td>
				<td><?= $rowDosen["kode_mk"] ?></td>
				<td><?= $rowDosen["nama_mk"] ?></td>
				<td><?= $rowDosen["kelas"] ?></td>
				<td>
					<?php 
						foreach($absenDosen as $rowAbsenDosen){
							echo $rowAbsenDosen["absen"];
						}
					 ?>
				</td>
			</tr>
			<?php $no++;
		endforeach; ?>
	</table>
<?php endif; ?>