<?php

	$npm = isset($url[1]) ? $url[1] : false;
	$kode_mkGet = isset($url[2]) ? $url[2] : false;
	$no_tugas = isset($url[3]) ? $url[3] : false;
	$nilai_tugas = isset($url[4]) ? $url[4] : false;

	if($nilai_tugas){
		$button = "Update";
	}else{
		$button = "Kirim";
	}

	$id_user = $_SESSION["id_user"];
	$status = $_SESSION["status"];
	$kode_mk = $_SESSION["kode_mk"];

	$queryTugas = mysqli_query($koneksi, "SELECT * FROM tugas_mahasiswa WHERE kode_mk='$kode_mk'");

	$tugasMhs = mysqli_query($koneksi, "SELECT * FROM tugas_mahasiswa WHERE npm='$id_user' AND kode_mk='$kode_mk'");

	function queryNilai( $npm, $kode_mk, $no_tugas ){
		global $koneksi;
		global $id_user;
		global $status;

		$queryNilai = mysqli_query($koneksi, "SELECT * FROM nilai_tugas WHERE npm='$npm' AND kode_mk='$kode_mk' AND no_tugas='$no_tugas'");
		
		$rowNilai = mysqli_fetch_assoc($queryNilai);
		if(mysqli_num_rows($queryNilai) == 0){
			echo "
				<td>-</td>";
				if($id_user && $status == "dosen"){
					echo "<td><a href='".BASE_URL."nilai_tugas/$npm/$kode_mk/$no_tugas'>Kasih Nilai</a></td>";
				}
		}else{
			echo "<td>$rowNilai[nilai_tugas]</td>";
			if($id_user && $status == "dosen"){
				echo "<td><a href='".BASE_URL."nilai_tugas/$npm/$kode_mk/$no_tugas/$rowNilai[nilai_tugas]'>Update</a><td>";
			}
		}
	}

?>