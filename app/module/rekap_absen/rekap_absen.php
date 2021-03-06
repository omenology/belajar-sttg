<?php

	$id_user = $_SESSION["id_user"];
	$level = $_SESSION["status"];

	$rekap = $url[1];
	$no=1;

	if($rekap == "kelas"){
		$kode_mk = $_SESSION["kode_mk"];
		$kelas = $_SESSION["kelas"];

		if($level == "mahasiswa"){
				$queryAbsenMhs = mysqli_query($koneksi, "SELECT absen FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND kelas='$kelas' AND absen='1' AND status='done'");
				$queryAbsenKeMhs = mysqli_query($koneksi, "SELECT absen_ke FROM absen WHERE npm='$id_user' AND kode_mk='$kode_mk' AND kelas='$kelas' AND status='done'");
				
				$persenAbsenMhs = @(mysqli_num_rows($queryAbsenMhs) / mysqli_num_rows($queryAbsenKeMhs) * 100);
		}elseif($level == "dosen"){
			$db->query("SELECT DISTINCT absen.npm, absen.kelas, mahasiswa.nama_mhs, mata_kuliah.nama_mk FROM absen JOIN mahasiswa ON absen.npm=mahasiswa.npm JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.nidn=:nidn AND absen.kode_mk=:kdmk AND absen.kelas=:kelas ORDER BY mata_kuliah.nama_mk, absen.npm ASC");
			$db->bind('nidn',$id_user);
			$db->bind('kdmk',$kode_mk);
			$db->bind('kelas',$kelas);
			$data['mahasiswa'] = $db->resultSet();

			$db->query("SELECT absen FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done'");
			$db->bind('kdmk',$kode_mk);
			foreach ($data['mahasiswa'] as $row) {
				$db->bind('npm',$row['npm']);
				$data['absen'][] = $db->resultSet();	
			}

			$db->query("SELECT absen FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done' AND absen = '1'");
			$db->bind('kdmk',$kode_mk);
			foreach($data['mahasiswa'] as $row){
				$db->bind('npm',$row['npm']);
				$data['absenPersen'][] = $db->rowCount();
			}

			$db->query("SELECT absen_ke FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done'");
			$db->bind('kdmk',$kode_mk);
			foreach($data['mahasiswa'] as $row){
				$db->bind('npm',$row['npm']);
				$data['absenKe'][] = $db->rowCount();
			}
		}
	}elseif($rekap == "depan"){
		if($level == "dosen"){
			$db->query("SELECT DISTINCT absen.npm, absen.kelas, mahasiswa.nama_mhs, mata_kuliah.kode, mata_kuliah.nama_mk FROM absen JOIN mahasiswa ON absen.npm=mahasiswa.npm JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.nidn=:nidn ORDER BY mata_kuliah.nama_mk, absen.npm ASC");
			$db->bind('nidn',$id_user);
			$data['mahasiswa'] = $db->resultSet();

			$db->query("SELECT absen FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done'");
			foreach ($data['mahasiswa'] as $row) {
				$db->bind('npm',$row['npm']);
				$db->bind('kdmk',$row['kode']);
				$data['absen'][] = $db->resultSet();	
			}
			$db->query("SELECT absen FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done' AND absen = '1'");
			foreach($data['mahasiswa'] as $row){
				$db->bind('npm',$row['npm']);
				$db->bind('kdmk',$row['kode']);
				$data['absenPersen'][] = $db->rowCount();
			}

			$db->query("SELECT absen_ke FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done'");
			foreach($data['mahasiswa'] as $row){
				$db->bind('npm',$row['npm']);
				$db->bind('kdmk',$row['kode']);
				$data['absenKe'][] = $db->rowCount();
			}
		}elseif($level == "mahasiswa"){
			$db->query("SELECT DISTINCT absen.kode_mk , absen.kelas, absen.npm,mata_kuliah.nama_mk FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE npm=:npm ORDER BY mata_kuliah.nama_mk ASC");
			$db->bind('npm',$id_user);
			$data['absenMhs'] = $db->resultSet();

			$db->query("SELECT absen FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done'");
			$db->bind('npm',$id_user);
			foreach($data['absenMhs'] as $row){
				$db->bind('kdmk',$row['kode_mk']);
				$data['absen'][] = $db->resultSet();
			}
			
			$db->query("SELECT absen FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done' AND absen = '1'");
			$db->bind('npm',$id_user);
			foreach($data['absenMhs'] as $row){
				$db->bind('kdmk',$row['kode_mk']);
				$data['absenPersen'][] = $db->rowCount();
			}

			$db->query("SELECT absen_ke FROM absen WHERE npm=:npm AND kode_mk=:kdmk AND status='done'");
			$db->bind('npm',$id_user);
			foreach($data['absenMhs'] as $row){
				$db->bind('kdmk',$row['kode_mk']);
				$data['absenKe'][] = $db->rowCount();
			}
			print_r($data['absenKe']);
		}
	}