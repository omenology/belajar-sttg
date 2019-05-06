<?php 
	session_start();
 
    if(!isset($_SESSION['status'])){
        header("location: ".BASE_URL."login");
    }
	$id_user = $_SESSION['id_user'];
	$status = $_SESSION['status'];

	if ($status ==  'mahasiswa') {
		$query = mysqli_query($koneksi,"SELECT jadwal_mata_kuliah.kode_mk, jadwal_mata_kuliah.kelas,jadwal_mata_kuliah.ruangan,jadwal_mata_kuliah.jam,jadwal_mata_kuliah.hari,mata_kuliah.nama_mk,mata_kuliah.bobot,dosen.nama_dsn,dosen.email,dosen.hp,dosen.foto FROM jadwal_mahasiswa JOIN jadwal_mata_kuliah ON jadwal_mahasiswa.kode_mk = jadwal_mata_kuliah.kode_mk AND jadwal_mahasiswa.kelas = jadwal_mata_kuliah.kelas JOIN jadwal_dosen ON jadwal_mata_kuliah.kode_mk = jadwal_dosen.kode_mk AND jadwal_mata_kuliah.kelas = jadwal_dosen.kelas JOIN mata_kuliah ON jadwal_mahasiswa.kode_mk = mata_kuliah.kode JOIN dosen ON jadwal_dosen.nidn = dosen.nidn WHERE jadwal_mahasiswa.npm = '$id_user'");
	}else{
		$query = mysqli_query($koneksi,"SELECT dosen.nama_dsn, dosen.email, dosen.hp, dosen.foto, jadwal_dosen.*, mata_kuliah.nama_mk, jadwal_mata_kuliah.ruangan,jadwal_mata_kuliah.jam,jadwal_mata_kuliah.hari FROM jadwal_dosen JOIN mata_kuliah ON jadwal_dosen.kode_mk = mata_kuliah.kode JOIN jadwal_mata_kuliah ON jadwal_mata_kuliah.kode_mk = jadwal_dosen.kode_mk AND jadwal_mata_kuliah.kelas = jadwal_dosen.kelas JOIN dosen ON jadwal_dosen.nidn = dosen.nidn WHERE jadwal_dosen.nidn = '$id_user'");
	}
	//var_dump(mysqli_fetch_assoc($query));
?>