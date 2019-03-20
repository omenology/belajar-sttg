<div class="container">
	<h2>Materi</h2>
	<form action="<?=BASE_URL.'module/materi/materi.php' ?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="kd-mk" value="kdmk1"> <!-- menggunakan seassion -->
		<input type="hidden" name="kelas" value="C"> <!-- menggunakan seassion -->
		<input type="file" name="materi">
		<input type="submit" name="submit">
	</form>
</div>