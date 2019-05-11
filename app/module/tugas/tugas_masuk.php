<?php
	include_once '../../function/config.php';

	session_start();
	$npm = $_SESSION['id_user'];
	$kd_mk = $_SESSION['kode_mk'];
	//$no_tgs = $_SESSION['no_tugas']; 
	//$kelas = $_SESSION['kelas']

	$file = uploaded();

	if($file){
		mysqli_query($koneksi,"INSERT INTO tugas_mahasiswa (npm,kode_mk,no_tugas,file,file_tugas) VALUES ('$npm', '$kd_mk', '$no_tgs', '$file[1]','$file[0]')");

		header("location:".BASE_URL."index.php?page=detail_tugas");
	}

	function uploaded(){
		$fileName = $_FILES['tugas']['name'];
		$error = $_FILES['tugas']['error'];
		$tmpName = $_FILES['tugas']['tmp_name'];
		$destination = BASE_URL."dir/tugas/";
		$file[] = $fileName;

		if($error == 4){
			return false;
		}

		$ekstensiFileValid = ["pdf","docx","doc","ppt","rar"];
		$ekstensiFile = explode(".", $fileName);
		$ekstensiFile = strtolower(end($ekstensiFile));
		if(!in_array($ekstensiFile, $ekstensiFileValid)){
			return false;
		}

		$namaFileBaru = uniqid().".".$ekstensiFile;
		$file[]=$namaFileBaru;
		move_uploaded_file($tmpName, "../../dir/tugas/".$namaFileBaru);
		return $file;
	} 