<?php 
session_start();
var_dump($_SESSION);
?>
<div class="container">
	<h2>Materi</h2>
	<form action="<?php echo BASE_URL."app/module/materi/materi.php"; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="materi">
		<input type="submit" name="submit">
	</form>
</div>