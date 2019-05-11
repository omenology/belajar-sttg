<?php
	include_once 'app/module/tugas/listTugas_data.php';
?>
<div class="container">
	<h2>Tugas</h2>
	<form action="<?php echo BASE_URL."app/module/tugas/tugas_masuk.php"; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="tugas">
		<input type="submit" name="submit">
	</form>
	<?php foreach ($tugas as $row):?>
		<a href="<?php echo BASE_URL."app/dir/tugas/".$row['file']; ?>" download = "<?= $row['file_tugas']; ?>"><?= $row['file_tugas']; ?></a><br>
	<?php endforeach;?>
</div>