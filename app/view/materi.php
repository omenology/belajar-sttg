<?php 
include_once 'app/module/materi/materi_data.php';
var_dump($query);
?>
<div class="container">
	<h2>Materi</h2>
	<form action="<?php echo BASE_URL."app/module/materi/materi_masuk.php"; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="materi">
		<input type="submit" name="submit">
	</form>
	<?php foreach ($query as $row):?>
		<a href="<?php echo BASE_URL."app/dir/materi/".$row['file_materi']; ?>" download = "<?= $row['materi']; ?>"><?= $row['materi']; ?></a><br>
	<?php endforeach;?>
</div>