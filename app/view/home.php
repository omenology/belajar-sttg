<?php 
	session_start();
	$id_user = $_SESSION['id_user'];
	$status = $_SESSION['status'];

	if ($status ==  'mahasiswa') {
		$query = mysqli_query($koneksi,"SELECT jadwal_mata_kuliah.kode_mk, jadwal_mata_kuliah.kelas,jadwal_mata_kuliah.ruangan,jadwal_mata_kuliah.jam,jadwal_mata_kuliah.hari,mata_kuliah.nama_mk,mata_kuliah.bobot,dosen.nama_dsn,dosen.email,dosen.hp,dosen.foto FROM jadwal_mahasiswa JOIN jadwal_mata_kuliah ON jadwal_mahasiswa.kode_mk = jadwal_mata_kuliah.kode_mk AND jadwal_mahasiswa.kelas = jadwal_mata_kuliah.kelas JOIN jadwal_dosen ON jadwal_mata_kuliah.kode_mk = jadwal_dosen.kode_mk AND jadwal_mata_kuliah.kelas = jadwal_dosen.kelas JOIN mata_kuliah ON jadwal_mahasiswa.kode_mk = mata_kuliah.kode JOIN dosen ON jadwal_dosen.nidn = dosen.nidn WHERE jadwal_mahasiswa.npm = '$id_user'");
	}else{
		$query = mysqli_query($koneksi,"SELECT dosen.nama_dsn, dosen.email, dosen.hp, dosen.foto, jadwal_dosen.*, mata_kuliah.nama_mk, jadwal_mata_kuliah.ruangan,jadwal_mata_kuliah.jam,jadwal_mata_kuliah.hari FROM jadwal_dosen JOIN mata_kuliah ON jadwal_dosen.kode_mk = mata_kuliah.kode JOIN jadwal_mata_kuliah ON jadwal_mata_kuliah.kode_mk = jadwal_dosen.kode_mk AND jadwal_mata_kuliah.kelas = jadwal_dosen.kelas JOIN dosen ON jadwal_dosen.nidn = dosen.nidn WHERE jadwal_dosen.nidn = '$id_user'");
	}
	var_dump(mysqli_fetch_assoc($query));
?>

<div class="container">
	<a href="<?= BASE_URL.'app/module/loginlogout/logout.php'?>">Logout</a>
	<a href="<?= BASE_URL.'index.php?page=rekap_absen' ?>">rekap</a>
	<?php while ($row = mysqli_fetch_assoc($query)) :?>
		<section style="border: 1px solid;display: inline-block;padding: 10px;margin: 5px;">
			<a href="<?=BASE_URL."index.php?page=kelas&kdmk=$row[kode_mk]&kelas=$row[kelas]"?>">
			<?php
			echo $row['nama_mk']." ".$row['kelas']."<br>";
			echo "$row[ruangan]<br>";
			echo "$row[hari] $row[jam]<br>";
			echo "$row[nama_dsn] $row[foto]<br>";
			echo "$row[email]<br>";
			echo "$row[hp]<br>";
			?>
			</a>
		</section>
	<?php endwhile;?>
</div>