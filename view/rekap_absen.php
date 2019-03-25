<?php 
	
	session_start();
	$npm = isset($_SESSION["npm"]) ? $_SESSION["npm"] : false;
	$nidn = isset($_SESSION["nidn"]) ? $_SESSION["nidn"] : false;
	if($npm){
		var_dump($npm);
	}else{
		var_dump($nidn);
	}

	$queryMhs = mysqli_query($koneksi, "SELECT absen.*,mata_kuliah.nama_mk FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.npm='$npm'");
	$queryDosen = mysqli_query($koneksi, "SELECT absen.*,mata_kuliah.*,mahasiswa.* FROM absen JOIN mata_kuliah JOIN mahasiswa ON absen.kode_mk=mata_kuliah.kode,absen.npm=mahasiswa.npm WHERE nidn='$nidn'");


	if($nidn){

			echo "<table border='1'>
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Mata Kuliah</th>
					<th>NPM</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Absen</th>
				</tr>";
			$no=1;
			while($rowDsn=mysqli_fetch_assoc($queryDosen)){
				echo "<tr>
						<td>$no</td>
						<td>$rowDsn[kode_mk]</td>
						<td>$rowDsn[nama_mk]</td>
						<td>$rowDsn[npm]</td>
						<td>$rowDsn[nama]</td>
						<td>$rowDsn[kelas]</td>
						<td>$rowDsn[absen]</td>
					</tr>";
				$no++;
			}
			echo "</table>";

	}elseif($npm){
			echo "<table border='1'>
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Mata Kuliah</th>
					<th>Kelas</th>
					<th>Absen</th>
				</tr>";
			$no=1;
			while($rowMhs=mysqli_fetch_assoc($queryMhs)){
				echo "<tr>
						<td>$no</td>
						<td>$rowMhs[kode_mk]</td>
						<td>$rowMhs[nama_mk]</td>
						<td>$rowMhs[kelas]</td>
						<td>$rowMhs[absen]</td>
					</tr>";
				$no++;
			}
			echo "</table>";
	}


?>
