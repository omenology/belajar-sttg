<?php 
	
	session_start();
	$id_user = $_SESSION["id_user"];
	$status = $_SESSION["status"];
	$kode_mk = $_SESSION["kode_mk"];

	var_dump($kode_mk);

	$queryMhs = mysqli_query($koneksi, "SELECT DISTINCT absen.kode_mk, absen.kelas, mata_kuliah.nama_mk FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.npm='$id_user' AND kode_mk='$kode_mk'");
	$absenMhs = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk'");
	
	$queryDosen = mysqli_query($koneksi, "SELECT DISTINCT absen.npm, absen.kode_mk, absen.kelas, mahasiswa.nama_mhs, mata_kuliah.nama_mk FROM absen JOIN mahasiswa ON absen.npm=mahasiswa.npm JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.nidn='$id_user' AND absen.kode_mk='$kode_mk'");
	$absenDosen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE nidn='$id_user' AND kode_mk='$kode_mk'");
	$row = mysqli_fetch_assoc($queryDosen);

	var_dump($row);

	$no=1;

if($id_user && $status == "mahasiswa") : ?>
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
									foreach($absenMhs as $rowAbsen){
									echo $rowAbsen["absen"];
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
						foreach($absenDosen as $rowAbsen){
							echo $rowAbsen["absen"];
						}
					 ?>
				</td>
			</tr>
			<?php $no++;
		endforeach; ?>
	</table>
<?php endif; ?>