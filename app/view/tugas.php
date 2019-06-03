<?php
$kode_mk = $_SESSION['kode_mk'];
$tugas = mysqli_query($koneksi, "SELECT no_tugas, judul, time_limit FROM tugas WHERE kode_mk='$kode_mk'");	

?>

<div class="container">
	<h2>Materi</h2>
	<form action="<?=BASE_URL.'app/module/tugas/tugas.php' ?>" method="POST">
		<input type="text" name="judul">
		<input type="text" name="deskripsi">
		<input type="date" name="time-post"> 
		<input type="date" name="time-limit">
		<input type="submit" name="submit">
	</form>

	<h2>Tugas</h2>

	<table>
		<tr>

			<th>No</th>
			<th>Judul</th>
			<th>Time Limit</th>
			
		</tr>

		<?php $i=1; ?>
		<?php foreach($tugas as $row ) : ?>	
		<tr>
			<td><?= $i; ?></td>
			<td><a href="http://localhost/belajar-sttg/detail_tugas/<?=$row['no_tugas']?>"><?=$row["judul"];?></a></td>
			<td><?= $row["time_limit"];?></td>
		</tr>

		<?php $i++; ?>
		<?php endforeach; ?>

	</table>

</div>

