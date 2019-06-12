<?php

	include_once "app/module/rekap_absen/rekap_absen.php";
?>
<?php if($id_user && $level == "mahasiswa") : ?>
<div class="container">
	<?php if($rekap == "depan") : ?>
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
				</thead>
			</tr>
			
			<?php foreach($queryDataAbsenMhs as $rowDataAbsenMhs) { ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $rowDataAbsenMhs["nama_mk"] ?></td>
				<?php $queryAbsenMhs = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$rowDataAbsenMhs[kode_mk]' AND STATUS='done'"); ?>
					<td>
						<?php foreach ($queryAbsenMhs as $rowAbsenMhs ) {
							echo $rowAbsenMhs["absen"];
						} ?>
					</td>
				<?php 
					$queryAbsenMhs = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$rowDataAbsenMhs[kode_mk]' AND kelas='$rowDataAbsenMhs[kelas]' AND absen='1' AND status='done'");

					$queryAbsenKeMhs = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$rowDataAbsenMhs[npm]' AND kode_mk='$rowDataAbsenMhs[kode_mk]' AND kelas='$rowDataAbsenMhs[kelas]' AND status='done'");

					$persenAbsenMhs= @(mysqli_num_rows($queryAbsenMhs) / mysqli_num_rows($queryAbsenKeMhs) * 100);
				?>
					<td><?= $persenAbsenMhs ?></td>
				</tr>
			<?php } ?>
		</table>
	<?php elseif($rekap == "kelas") : ?>
			<?= $persenAbsenMhs ?>
	<?php endif; ?>
<?php elseif($id_user && $level == "dosen") : ?>
	<table>
		<tr>
			<th>No</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Mata Kuliah</th>
			<th>Kelas</th>
			<th>Absen</th>
			<th>Persentasi</th>
		</tr>
		<tr>
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
			<td></td>
		</tr>

		<?php foreach ($queryDataAbsen as $rowDataAbsen) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $rowDataAbsen["npm"] ?></td>
				<td><?= $rowDataAbsen["nama_mhs"] ?></td>
				<td><?= $rowDataAbsen["nama_mk"] ?></td>
				<td><?= $rowDataAbsen["kelas"] ?></td>
		<?php $queryAbsen = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$rowDataAbsen[npm]' AND status='done'"); ?>
				<td>
					<?php foreach ($queryAbsen as $rowAbsen) {
						echo $rowAbsen["absen"];
					} ?>
				</td>
			</tr>
		<?php } ?>
	</table>
	<?php endif; ?>
</div>