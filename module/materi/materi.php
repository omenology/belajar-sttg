<?php
	include_once '../../function/helper.php';
	include_once '../../function/koneksi.php';

	$kd_mk = $_POST['kd-mk']; // menggunakan seassion 
	$kelas = $_POST['kelas']; // menggunakan seassion

	$file = uploaded();

	if($file){
		mysqli_query($koneksi,"INSERT INTO materi (kode_mk,kelas,materi) VALUES ('$kd_mk','$kelas','$file')");
		
		echo "string";
	}

	function uploaded(){
		$fileName = $_FILES['materi']['name'];
		$error = $_FILES['materi']['error'];
		$tmpName = $_FILES['materi']['tmp_name'];
		$destination = BASE_URL."dir/materi/";

		if($error == 4){
			return false;
		}

		$ekstensiFileValid = ["pdf","docx","doc","ppt","rar"];
		$ekstensiFile = explode(".", $fileName);
		$ekstensiFile = strtolower(end($ekstensiFile));
		if(!in_array($ekstensiFile, $ekstensiFileValid)){
			return false;
		}
		move_uploaded_file($tmpName, "../../dir/materi/".$fileName);
		return $fileName;
	}