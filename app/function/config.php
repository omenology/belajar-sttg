<?php
	define("BASE_URL", "http://localhost/belajar-sttg/");
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "belajar_sttg";

	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "belajar_sttg");

	$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");

	