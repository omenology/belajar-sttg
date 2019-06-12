<?php

	$npm = isset($url[1]) ? $url[1] : false;
	$kode_mkGet = isset($url[2]) ? $url[2] : false;
	$no_tugas = isset($url[3]) ? $url[3] : false;
	$nilai_tugas = isset($url[4]) ? $url[4] : false;

	$id_user = $_SESSION["id_user"];
	$status = $_SESSION["status"];
	$kode_mk = $_SESSION["kode_mk"];
	$kelas = $_SESSION["kelas"];
	$level = $_SESSION["status"];

	if($nilai_tugas){
		$button = "Update";
	}else{
		$button = "Kirim";
	}

	if($level == "dosen"){
		$jadwalMhs = mysqli_query($koneksi, "SELECT npm, kode_mk FROM jadwal_mahasiswa WHERE kelas='$kelas' AND kode_mk='$kode_mk'");
		foreach($jadwalMhs as $rowJadwal){
			$queryTugas = mysqli_query($koneksi, "SELECT tugas_mahasiswa.*, mahasiswa.nama_mhs FROM tugas_mahasiswa JOIN mahasiswa ON tugas_mahasiswa.npm=mahasiswa.npm WHERE tugas_mahasiswa.npm='$rowJadwal[npm]' AND kode_mk='$rowJadwal[kode_mk]'");
			foreach($queryTugas as $rowTugas){
				$queryNilaiTugas = mysqli_query($koneksi, "SELECT nilai_tugas FROM nilai_tugas WHERE npm='$rowTugas[npm]' AND kode_mk='$rowTugas[kode_mk]' AND no_tugas='$rowTugas[no_tugas]'");

				$rowNilaiTugas = mysqli_fetch_assoc($queryNilaiTugas);

				if(mysqli_num_rows($queryNilaiTugas) == 0){
					$tilai = "<a href='".BASE_URL."nilai_tugas/$rowTugas[npm]/$rowTugas[kode_mk]/$rowTugas[no_tugas]'>Tilai</a>";
				}else{
					$tilai = "<a href='".BASE_URL."nilai_tugas/$rowTugas[npm]/$rowTugas[kode_mk]/$rowTugas[no_tugas]/$rowNilaiTugas[nilai_tugas]'>Edit</a>";
				}

				$tugas[]=[$rowTugas["npm"], $rowTugas["nama_mhs"], $rowTugas["kode_mk"], $rowTugas["no_tugas"], $rowTugas["file"], $rowNilaiTugas["nilai_tugas"], $tilai];
			}
		}
	}elseif($level == "mahasiswa"){
		$queryTugasMhs = mysqli_query($koneksi, "SELECT * FROM tugas_mahasiswa WHERE npm='$id_user' AND kode_mk='$kode_mk'");
		foreach($queryTugasMhs as $rowTugasMhs){
			$nilaiTugasMhs = mysqli_query($koneksi, "SELECT no_tugas, nilai_tugas FROM nilai_tugas WHERE npm='$rowTugasMhs[npm]' AND kode_mk='$rowTugasMhs[kode_mk]' AND no_tugas='$rowTugasMhs[no_tugas]'");

			$rowNilaiTugasMhs = mysqli_fetch_assoc($nilaiTugasMhs);
			
			$tugasMhs[]=[$rowNilaiTugasMhs["no_tugas"], $rowTugasMhs["file"], $rowNilaiTugasMhs["nilai_tugas"]];

		}
	}

?>