<?php
	include_once "app/module/rekap_absen/rekap_absen.php";
?>
<?php if($id_user && $level == "mahasiswa") { ?>
<div class="container">
	<?php if($rekap == "depan") : ?>
	<table>
		<thead>
			<tr class="teal lighten-1">
				<th rowspan="2">No</th>
				<th rowspan="2">Matakuliah</th>
				<th>Absen</th>
				<th rowspan="2">Persentase</th>
			</tr>
			
			<tr>
				<th>
					<?php
						for($i=1; $i<=14; $i++){
							echo $i.' ';
						}
					?>
				</th>
			</thead>
		</tr>
		<?php $i=0; ?>
		<?php foreach($data['absenMhs'] as $row) : ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row["nama_mk"] ?></td>
			<td>
				<?php foreach($data['absen'][$i] as $row) echo $row['absen']; ?>
			</td>
			<?php $persenAbsenMhs = 14/100*$data['absenPersen'][$i]; ?>
			<td><?= $persenAbsenMhs ?></td>
		</tr>
		<?php $i++; endforeach; ?>
	</table>
	<?php elseif($rekap == "kelas") : ?>
	<?= $persenAbsenMhs ?>
	<?php endif; ?>
	<?php elseif($id_user && $level == "dosen") : ?>
	<table>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">NPM</th>
			<th rowspan="2">Nama</th>
			<th rowspan="2">Mata Kuliah</th>
			<th rowspan="2">Kelas</th>

	<?php if($rekap == "depan") { ?>
		<table>
			<thead>
				<tr class="teal lighten-1">
					<th>No</th>
					<th>Matakuliah</th>
					<th>Absen</th>
					<th>Persentase</th>
				</tr>
				
				<tr>
					<td></td>
					<td></td>
					<th>
						<?php
							for($i=1; $i<=14; $i++){
								echo $i.' ';
							}
						?>
					</th>
					<td></td>
				</tr>
			</thead>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $rowDataAbsenMhs["nama_mk"] ?></td>
					<td>
						<?php foreach ($queryAbsen as $rowAbsenMhs ) {
							echo $rowAbsenMhs["absen"];
						} ?>
					</td>
					<td><?= $persenAbsenMhs ?></td>
				</tr>
			<?php } ?>
		</table>
	<?php }elseif($rekap == "kelas") { ?>
			<?= $persenAbsenMhs ?>
	<?php } ?>
<?php }elseif($id_user && $level == "dosen") { ?>
	<table>
		<tr>
			<th>No</th>
			<th>NPM</th>
			<th>Nama</th>
		<?php if($rekap == "depan") { ?>
			<th>Mata Kuliah</th>
			<th>Kelas</th>
		<?php } ?>
>>>>>>> 70e9907a70697db717fa59faee57a6fa76d59008
			<th>Absen</th>
			<th rowspan="2">Persentasi</th>
		</tr>
		<tr>
<<<<<<< HEAD
=======
			<td></td>
			<td></td>
			<td></td>
		<?php if($rekap == "depan") { ?>
			<td></td>
			<td></td>
		<?php } ?>
>>>>>>> 70e9907a70697db717fa59faee57a6fa76d59008
			<th>
				<?php
					for($i=1; $i<=14; $i++){
						echo $i;
					}
				?>
			</th>
		</tr>
<<<<<<< HEAD
		<?php $i=0; ?>
		<?php foreach ($data['mahasiswa'] as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row["npm"] ?></td>
			<td><?= $row["nama_mhs"] ?></td>
			<td><?= $row["nama_mk"] ?></td>
			<td><?= $row["kelas"] ?></td>
			<td>
				<?php foreach($data['absen'][$i] as $row) echo $row['absen']; ?>
			</td>
			<?php $i++; ?>
		</tr>
		<?php endforeach; ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $rowDataAbsen["npm"] ?></td>
				<td><?= $rowDataAbsen["nama_mhs"] ?></td>
			<?php if($rekap == "depan") { ?>
				<td><?= $rowDataAbsen["nama_mk"] ?></td>
				<td><?= $rowDataAbsen["kelas"] ?></td>
			<?php } ?>
				<td>
					<?php foreach ($queryAbsen as $rowAbsen) {
						echo $rowAbsen["absen"];
					} ?>
				</td>
				<td><?= $persenAbsenMhs ?></td>
			</tr>
		<?php } ?>
>>>>>>> 70e9907a70697db717fa59faee57a6fa76d59008
	</table>
	<?php } ?>
</div>