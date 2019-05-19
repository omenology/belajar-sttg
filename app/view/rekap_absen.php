<?php
	// session_start();
	$id_user = $_SESSION["id_user"];
	$status = $_SESSION["status"];
	$rekap = $url[1];
	var_dump($id_user);
	include_once "app/module/rekap_absen/rekap_absen.php";
	$no=1;
?>
<?php if($id_user && $status == "mahasiswa") : ?>
<div class="container">
	<table>
		<thead>
			<tr class="teal lighten-1">
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
							echo $i.' ';
						}
					?>
				</th>
			</thead>
		</tr>
		<?php foreach($queryMhs as $rowMhs) : ?>
		
		<tr>
			<td><?= $no ?></td>
			<td><?= $rowMhs["kode_mk"] ?></td>
			<td><?= $rowMhs["nama_mk"] ?></td>
			<td><?= $rowMhs["kelas"] ?></td>
			<td>
				<?php
					if($rekap == "kelas"){
						foreach($absenMhs as $rowAbsen){
							echo $rowAbsen["absen"].' ';
						}
					}elseif($rekap == "depan"){
						absMhs($rowMhs["kode_mk"]);
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
					if($rekap == "kelas"){
						foreach($absenDosen as $rowAbsenDosen){
							echo $rowAbsenDosen["absen"];
						}
					}elseif($rekap == "depan"){
						absDosen($rowDosen["npm"],$rowDosen["kode_mk"]);
					}
				?>
			</td>
		</tr>
		<?php $no++;
		endforeach; ?>
	</table>
	<?php endif; ?>
</div>