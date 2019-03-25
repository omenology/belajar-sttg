<?php 
	
	session_start();
	$id_user = $_SESSION["id_user"];

	var_dump($id_user);

	$queryMhs = mysqli_query($koneksi, "SELECT absen.*,mata_kuliah.nama FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode WHERE absen.npm='$id_user'");
	$queryDosen = mysqli_query($koneksi, "SELECT absen.*,mata_kuliah.*,mahasiswa.* FROM absen JOIN mata_kuliah ON absen.kode_mk=mata_kuliah.kode JOIN mahasiswa ON absen.npm=mahasiswa.npm WHERE absen.nidn='$id_user'");

	if($id_user==1){

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
						<td>$rowDsn[nama]</td>
						<td>$rowDsn[npm]</td>
						<td>$rowDsn[nama]</td>
						<td>$rowDsn[kelas]</td>
						<td>$rowDsn[absen]</td>
					</tr>";
				$no++;
			}
			echo "</table>";

	}elseif($id_user){
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
						<td>$rowMhs[nama]</td>
						<td>$rowMhs[kelas]</td>
						<td>$rowMhs[absen]</td>
					</tr>";
				$no++;
			}
			echo "</table>";
	}


?>
