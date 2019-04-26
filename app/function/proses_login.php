<?php

    include_once("../function/config.php");

    $email = $_POST['email'];
	$password = $_POST['password'];
	
	$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE email='$email' AND password='$password'");
    $dosen = mysqli_query($koneksi, "SELECT * FROM dosen WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows ($mahasiswa) == 1 or mysqli_num_rows ($dosen) == 1){
        session_start();
        if(mysqli_num_rows ($mahasiswa) == 1){
            
            $rows= mysqli_fetch_assoc($mahasiswa);
            
            $_SESSION['id_user'] = $rows['npm'];
            $_SESSION['status'] = 'mahasiswa';
        }elseif(mysqli_num_rows ($dosen) == 1){
            
            $rows= mysqli_fetch_assoc($dosen);
            
            $_SESSION['id_user'] = $rows['nidn'];
            $_SESSION['status'] = 'dosen';
        }
        header("location: ".BASE_URL."index.php?page=home");
    }

    header("location: ".BASE_URL."index.php?notif=true");
