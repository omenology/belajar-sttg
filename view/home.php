<?php 
	session_start();
	$id_user = $_SESSION['id_user'];
	$status = $_SESSION['status'];

	if ($status ==  'mahasiswa') {
		$query = mysqli_query($koneksi,"SELECT jadwal_mahasiswa.* , mata_kuliah.* FROM jadwal_mahasiswa JOIN mata_kuliah ON jadwal_mahasiswa.kode_mk = mata_kuliah.kode WHERE jadwal_mahasiswa.npm = '$id_user'");
	}else{
		$query = mysqli_query($koneksi,"SELECT jadwal_dosen.* , mata_kuliah.* FROM jadwal_dosen JOIN mata_kuliah ON jadwal_dosen.kode_mk = mata_kuliah.kode WHERE jadwal_dosen.nidn = '$id_user'");
	}


	// var_dump(mysqli_fetch_assoc($query));
    //SELECT jadwal_mahasiswa.* , mata_kuliah.* FROM jadwal_mahasiswa JOIN mata_kuliah ON jadwal_mahasiswa.kode_mk = mata_kuliah.kode WHERE jadwal_mahasiswa.npm = 1606001
?>

<div class="container">
	<a href="<?= BASE_URL.'module/loginlogout/logout.php'?>">Logout</a>

	<a href="<?= BASE_URL.'index.php?page=rekap_absen' ?>">rekap</a>
	<?php while ($row = mysqli_fetch_assoc($query)) :?>
		 <?php
			echo $row['nama']."<br>";
		?>
	<?php endwhile;?>
</div>