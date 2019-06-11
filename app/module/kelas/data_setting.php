<?php 
	
	$user_id = $_SESSION['id_user'];
	$level = $_SESSION['status'];
	$kode_mk = $_SESSION['kode_mk'];
	$kelas = $_SESSION['kelas'];
	
	if($level=='mahasiswa'){

		$queryKelas=mysqli_query($koneksi, "SELECT * FROM jadwal_mata_kuliah WHERE kode_mk='$kode_mk' AND kelas='$kelas'");
		$row=mysqli_fetch_assoc($queryKelas);
		$queryPindahKelas=mysqli_query($koneksi, "SELECT * FROM jadwal_mata_kuliah WHERE kode_mk='$kode_mk'");
		$queryMahasiswa=mysqli_query($koneksi, "SELECT jadwal_mahasiswa.*, jadwal_mata_kuliah.* FROM jadwal_mahasiswa JOIN jadwal_mata_kuliah ON jadwal_mahasiswa.kode_mk=jadwal_mata_kuliah.kode_mk AND jadwal_mahasiswa.kelas=jadwal_mata_kuliah.kelas WHERE jadwal_mahasiswa.npm='$user_id'");

		$kelasTersedia[]=null;

		foreach ($queryPindahKelas as $rowPindahKelas) {
				$y=0;
				foreach ($queryMahasiswa as $rowMahasiswa) {
					if($rowPindahKelas['hari']==$rowMahasiswa['hari']&&$rowPindahKelas['jam']==$rowMahasiswa['jam']){
						$y=1;
					}
				}

				if($y==0){
					$kelasTersedia[]=$rowPindahKelas['kelas'];
				}
		}
		var_dump($kelasTersedia);
	}elseif($level=='dosen'){

		$queryPindahKelas=mysqli_query($koneksi, "SELECT npm FROM pindah_kelas WHERE nidn='$user_id' AND kode_mk='$kode_mk'");
		$rowPindahKelas=mysqli_fetch_assoc($queryPindahKelas);
	}