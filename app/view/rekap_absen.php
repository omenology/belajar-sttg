<?php
	include_once "app/module/rekap_absen/rekap_absen.php";
?>
<?php if($id_user && $level == "mahasiswa") : ?>
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
			<?php $persenAbsenMhs = @(100/$data['absenKe'][$i]*$data['absenPersen'][$i]); ?>
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
			<th>Absen</th>
			<th rowspan="2">Persentasi</th>
		</tr>
		<tr>
			<th>
				<?php
					for($i=1; $i<=14; $i++){
						echo $i;
					}
				?>
			</th>
		</tr>
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
			<?php $persenAbsenMhs = @(100/$data['absenKe'][$i]*$data['absenPersen'][$i]); ?>
			<td><?= $persenAbsenMhs ?></td>
			<?php $i++; ?>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
</div>