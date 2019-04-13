<div class="container">
	<h2>Materi</h2>
	<form action="<?=BASE_URL.'app/module/tugas/tugas.php' ?>" method="POST">
		<input type="text" name="judul">
		<input type="text" name="deskripsi">
		<input type="date" name="time-post"> 
		<input type="date" name="time-limit">
		<input type="submit" name="submit">
	</form>
</div>