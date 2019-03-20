<div class="container">
	<h2>Materi</h2>
	<form action="<?=BASE_URL.'module/tugas/tugas.php' ?>" method="POST">
		<input type="hidden" name="kd-mk" value="kdmk1"> <!-- menggunakan seassion -->
		<input type="hidden" name="kelas" value="C"> <!-- menggunakan seassion -->
		<input type="hidden" name="no-tugas" value="1"> <!-- bingung -->
		<input type="text" name="judul">
		<input type="text" name="deskripsi">
		<input type="date" name="time-post"> <!-- menggunakan time() PHP -->
		<input type="date" name="time-limit">
		<input type="submit" name="submit">
	</form>
</div>