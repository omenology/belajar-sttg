<?php
	include_once 'app/module/tugas/detailTugas_data.php';
?>
<div class="container">
	<h2>Tugas</h2>
	<form action="<?php echo BASE_URL."app/module/tugas/tugas_masuk.php"; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="tugas">
		<input type="submit" name="submit">
	</form>
	<?php foreach ($tugas as $row):?>
		<ul>
			<li><?= $row["judul"] ?></li>
			<li><?= $row["deskripsi"] ?></li>
			<li><?= $row["time_limit"] ?></li>
		</ul>
	<?php endforeach;?>
	<?php foreach($tugas_mahasiswa as $row) : ?>
		<ul>
			<li><a href="<?php echo BASE_URL."app/module/listTugas_data/".$row['file_tugas']; ?>" download = "<?= $row['file_tugas']; ?>"><?= $row['file_tugas']; ?></a><br></li>
		</ul>
	<?php endforeach; ?>
</div>