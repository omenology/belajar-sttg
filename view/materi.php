<div class="container">
	<h2>TES</h2>
	<form action="<?=BASE_URL.'module/materi/materi.php' ?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="kd-mk" value="kdmk1">
		<input type="hidden" name="kelas" value="C">
		<input type="file" name="materi">
		<input type="submit" name="submit">
	</form>
</div>