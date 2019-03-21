<?php

	session_start();
	
	unset($_SESSION['mahasiswa']);
	unset($_SESSION['dosen']);
	
	header("location: ".BASE_URL."view/login.php");

?>