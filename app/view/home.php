<?php 
	session_start();
	$id_user = $_SESSION['id_user'];
	$status = $_SESSION['status'];

	if ($status ==  'mahasiswa') {
		$query = mysqli_query($koneksi,"SELECT jadwal_mata_kuliah.kelas,jadwal_mata_kuliah.ruangan,jadwal_mata_kuliah.jam,jadwal_mata_kuliah.hari,mata_kuliah.nama_mk,mata_kuliah.bobot,dosen.nama_dsn,dosen.email,dosen.hp,dosen.foto FROM jadwal_mahasiswa JOIN jadwal_mata_kuliah ON jadwal_mahasiswa.kode_mk = jadwal_mata_kuliah.kode_mk AND jadwal_mahasiswa.kelas = jadwal_mata_kuliah.kelas JOIN jadwal_dosen ON jadwal_mata_kuliah.kode_mk = jadwal_dosen.kode_mk AND jadwal_mata_kuliah.kelas = jadwal_dosen.kelas JOIN mata_kuliah ON jadwal_mahasiswa.kode_mk = mata_kuliah.kode JOIN dosen ON jadwal_dosen.nidn = dosen.nidn WHERE jadwal_mahasiswa.npm = '$id_user'");
	}else{
		$query = mysqli_query($koneksi,"SELECT jadwal_dosen.* , mata_kuliah.* FROM jadwal_dosen JOIN mata_kuliah ON jadwal_dosen.kode_mk = mata_kuliah.kode WHERE jadwal_dosen.nidn = '$id_user'");
	}


	var_dump(mysqli_fetch_assoc($query));
    //SELECT jadwal_mahasiswa.* , mata_kuliah.* FROM jadwal_mahasiswa JOIN mata_kuliah ON jadwal_mahasiswa.kode_mk = mata_kuliah.kode WHERE jadwal_mahasiswa.npm = 1606001
?>

<div class="container">
	<a href="<?= BASE_URL.'module/loginlogout/logout.php'?>">Logout</a>

	<a href="<?= BASE_URL.'index.php?page=rekap_absen' ?>">rekap</a>
	<?php while ($row = mysqli_fetch_assoc($query)) :?>
		<section>
			
		</section>
		 <?php
			//echo $row['nama']."<br>";
		?>
	<?php endwhile;?>
</div>