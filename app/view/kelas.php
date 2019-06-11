<?php
	$kode_mk = $_SESSION['kode_mk'] = $url[1] ;
	$kelas = $_SESSION['kelas'] =  $url[2] ;
?>
<div class="container-fluid">
	<a href="<?php echo BASE_URL."setting"; ?>">Setting</a>
	<a href="<?php echo BASE_URL."materi"; ?>">Materi</a>
	<a href="<?php echo BASE_URL."absen"; ?>">Absen</a>
	<a href="<?php echo BASE_URL."tugas"; ?>">Tugas</a>
	<a href="<?php echo BASE_URL."nilai_tugas" ?>">NilaiTugas</a>
	<a href="<?php echo BASE_URL."nilai" ?>">Nilai</a>
	<div class="row">
		<div class="col s4">
			<div class="card">
				<div class="card-content ">
					<span class="card-title center">Materi</span>
				</div>
			</div>
		</div>
		<div class="col s4">
			<div class="card">
				<div class="card-content">
					<span class="card-title center">Absen</span>
					<p>tampilkeun persentasi absen</p>
					<p>tampilkeun persentasi nilai</p>
					<p>tampilkeun nilai</p>
					<button>Absen</button>
				</div>
			</div>
		</div>
		<div class="col s4">
			<div class="card">
				<div class="card-content">
					<span class="card-title center">Tugas</span>
					<div class="card-panel">Tugas</div>
					<div class="card-panel">selesai</div>
				</div>
			</div>
		</div>
	</div>
	
</div>