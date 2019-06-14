<?php
	include_once 'app/module/kelas/data_setting.php';
?>
<div class="container">
	<div>
		<p>User Id = <?php echo $user_id ?></p>
		<p>Status = <?php echo $level ?></p>
		<p>Kode MK = <?php echo $kode_mk ?></p>
		<p>Kelas = <?php echo $kelas ?></p>
	</div>
	<div id="jadwal">
		
		<label>ruangan</label>
		<span><?php echo $row['ruangan'] ?></span><br>
		<label>jam</label>
		<span><?php echo $row['jam'] ?></span><br>
		<label>Hari</label>
		<span><?php echo $row['hari'] ?></span><br>
	</div>
	<div class="row">
		<form class="col s12">
			<div class="row">
				<div class="col s6">
					<h5>Setting Persentase Nilai</h5><br>
					<form action="<?php echo BASE_URL."app/module/kelas/update_setting.php"; ?>" method="POST">
						<div class="input-field">
							<label for="absen">Absen</label>
							<input type="text" name="absen" value="<?php echo $row['absen']; ?>" id="absen">
						</div>
						<div class="input-field">
							<label for="tugas">Tugas</label>
							<input type="text" name="tugas" value="<?php echo $row['tugas']; ?>" id="tugas">
						</div>
						<div class="input-field">
							<label for="uts">UTS</label>
							<input type="text" name="uts" value="<?php echo $row['uts']; ?>" id="uts">
						</div>
						<div class="input-field">
							<label for="uas">UAS</label>
							<input type="text" name="uas" value="<?php echo $row['uas']; ?>" id="uas">
						</div>
						<?php
						if($level=="dosen"){
						?>
						<input type="hidden" name="kode_mk" value="<?php echo $kode_mk; ?>">
						<input type="hidden" name="kelas" value="<?php echo $kelas; ?>">
						<?php
						echo "<input type='submit' name='button' value='Update Persentase Nilai' />";
						}
						?>
					</form>
				</div>
				<div class="col s6">
					<form action="<?php echo BASE_URL."app/module/kelas/update_setting.php"; ?>" method="POST">
						<h5>Setting Range Nilai</h5><br>
						<div class="input-field">
							<label for="a">A</label>
							<input type="text" id="a" name="a" value="<?php echo $row['a']; ?>">
						</div>
						<div class="input-field">
							<label for="b">B</label>
							<input type="text" id="b" name="b" value="<?php echo $row['b']; ?>">
						</div>
						<div class="input-field">
							<label for="c">C</label>
							<input type="text" id="c" name="c" value="<?php echo $row['c']; ?>">
						</div>
						<div class="input-field">
							<label for="d">D</label>
							<input type="text" id="d" name="d" value="<?php echo $row['d']; ?>">
						</div>
						<div class="input-field">
							<label for="disabled">E</label>
							<input disabled value="0" id="disabled" type="text">
						</div>
						
						<?php
						if($level=="dosen"){
						?>
						<input type="hidden" name="kode_mk" value="<?php echo $kode_mk; ?>">
						<input type="hidden" name="kelas" value="<?php echo $kelas; ?>">
						<?php
						echo "<input type='submit' name='button' value='Update Range Nilai' />";
						}
						?>
					</form>
				</div>
			</div>
		</form>
	</div>
	
	
	<?php
		if($level=="mahasiswa"){
	?>
	<form action="<?php echo BASE_URL."app/module/kelas/pindah_kelas.php"; ?>" method="POST">
		<div class="input-field">
			<label>Pindah Kelas</label>
			<select name='kelas_tujuan'>
				<?php
					foreach($kelasTersedia as $row){
						if($row){
				?>
				<option value='<?= $row ?>'><?=$row?></option>
				<?php
						}
					}
				?>
			</select>
		</div>
		<input class="waves-effect waves-light btn" type='submit' name='button' value='Pindah Kelas' />
	</form>
	<?php
		}elseif($level=="dosen"){
	?>
	<form action="<?= BASE_URL."app/module/kelas/pindah_kelas.php"; ?>" method="POST">
		<br><label>Pindah Jadwal</label><br>
	</form>
	<?php
			if($rowPindahKelas){
	?>
	<label>Data Permintaan Pindah Kelas</label>
	<table>
		<tr>
			<td>NPM</td>
			<td>Action</td>
		</tr>
		<?php
			foreach ($rowPindahKelas as $key) {
		?>
		<tr>
			<td><?= $key ?></td>
			<td><a href="app/module/kelas/pindah_kelas.php?button=Terima&npm=<?= $key ?>">Terima</td>
			<td><a href="app/module/kelas/pindah_kelas.php?button=Tolak&npm=<?= $key ?>">Tolak</td>
		</tr>
		<?php
		}
		?>
	</table>
	<?php
			}
		}
	?>
</div>
</div>