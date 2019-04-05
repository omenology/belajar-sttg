<?php
	
	include_once("../../function/helper.php");
    include_once("../../function/koneksi.php");
	
	session_start();

	$user_id = $_SESSION['id_user'];
	$level = $_SESSION['status'];
	$kode_mk = $_GET['kode_mk'];
	$kelas = $_GET['kelas'];

	$queryKelas=mysqli_query($koneksi, "SELECT * FROM jadwal_mata_kuliah WHERE kode_mk='$kode_mk' AND kelas='$kelas'");
	$row=mysqli_fetch_assoc($queryKelas);
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

	<form action="update_setting.php" method="POST">
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

		<form action="update_setting.php" method="POST">
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
</div>