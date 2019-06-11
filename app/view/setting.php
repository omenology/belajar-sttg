<?php
	include_once 'app/module/kelas/data_setting.php';
?>
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
<div id="setting_form">

	<form action="<?php echo BASE_URL."app/module/kelas/update_setting.php"; ?>" method="POST">
		<br><label>Setting Persentase Nilai</label><br>
		<p>Absen = <input type="text" name="absen" value="<?php echo $row['absen']; ?>">%</p>
		<p>Tugas = <input type="text" name="tugas" value="<?php echo $row['tugas']; ?>">%</p>
		<p>UTS = <input type="text" name="uts" value="<?php echo $row['uts']; ?>">%</p>
		<p>UAS = <input type="text" name="uas" value="<?php echo $row['uas']; ?>">%</p>
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

	<form action="<?php echo BASE_URL."app/module/kelas/update_setting.php"; ?>" method="POST">
		<br><label>Setting Range Nilai</label><br>
		<p>A : &gt= <input type="text" name="a" value="<?php echo $row['a']; ?>"></p>
		<p>B : &gt= <input type="text" name="b" value="<?php echo $row['b']; ?>"></p>
		<p>C : &gt= <input type="text" name="c" value="<?php echo $row['c']; ?>"></p>
		<p>D : &gt= <input type="text" name="d" value="<?php echo $row['d']; ?>"></p>
		<p>E : &gt= 0 </p><br>
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
	<?php 
		if($level=="mahasiswa"){
	?>
	<form action="<?php echo BASE_URL."app/module/kelas/pindah_kelas.php"; ?>" method="POST">
		<br><label>Pindah Kelas</label><br>
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
		<input type='submit' name='button' value='Pindah Kelas' />
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