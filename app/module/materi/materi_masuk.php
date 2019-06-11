<?php
	include_once '../../function/config.php';
	include_once '../../function/Database.php';

	$db = new Database;

	session_start();
	$kd_mk = $_SESSION['kode_mk']; 
	$kelas = $_SESSION['kelas']; 

	$file = uploaded();

	if($file){
		$db->query("INSERT INTO materi (kode_mk,kelas,file_materi,materi) VALUES (:kdmk,:kelas,:file_materi,:materi)");
		$db->bind('kdmk',$kd_mk);
		$db->bind('kelas',$kelas);
		$db->bind('file_materi',$file[1]);
		$db->bind('materi',$file[0]);
		$db->execute();
		
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