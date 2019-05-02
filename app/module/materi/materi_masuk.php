<?php
	include_once '../../function/config.php';

	session_start();
	$kd_mk = $_SESSION['kode_mk']; 
	$kelas = $_SESSION['kelas']; 

	$file = uploaded();

	if($file){
		mysqli_query($koneksi,"INSERT INTO materi (kode_mk,kelas,file_materi,materi) VALUES ('$kd_mk','$kelas','$file[1]','$file[0]')");
		
		header("location:".BASE_URL."index.php?page=materi");
	}

	function uploaded(){
		$fileName = $_FILES['materi']['name'];
		$error = $_FILES['materi']['error'];
		$tmpName = $_FILES['materi']['tmp_name'];
		$destination = BASE_URL."dir/materi/";
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
		move_uploaded_file($tmpName, "../../dir/materi/".$namaFileBaru);
		return $file;
	}