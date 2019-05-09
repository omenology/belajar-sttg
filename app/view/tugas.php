<?php
	include_once 'app/module/tugas/listTugas_data.php';
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

		<?php $i=1 ?>
		<?php foreach ($tugas as $row ): ?>
			
		<tr>
			
			<td><?= $i; ?></td>
			<td><a href="<?=BASE_URL;?>app/view/detail_tugas.php?no_tugas=<?=$row["no_tugas"]?>&kelas=<?=$row["kelas"]?>&kode_mk=<?=$row["kode_mk"]?>"><?=$row["judul"];?></a></td>
			<td><?= $row["time_limit"];?></td>

		</tr>

		<?php $i++; ?>
		<?php endforeach ?>

	</table>

</div>

