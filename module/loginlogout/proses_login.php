<?php

    include_once("../../function/helper.php");

    $email = $_POST['email'];
	$password = $_POST['password'];
	
	$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE email='$email' AND password='$password'");
    $dosen = mysqli_query($koneksi, "SELECT * FROM dosen WHERE email='$email' AND password='$password'");

if(mysqli_num_rows ($mahasiswa) == 1 or mysqli_num_rows ($dosen) == 1){
        if($mahasiswa){
            
            $rows= mysqli_fetch_assoc($mahasiswa);
            
            session_start();
            
            $_SESSION['npm'] = $rows['npm'];
            $_SESSION['status'] = 'mahasiswa';
            
            header("location: ".BASE_URL."tamplate/header.php");
        }elseif($dosen){
            
            $rows= mysqli_fetch_assoc($dosen);
            
            session_start();
            
            $_SESSION['nidn'] = $rows['nidn'];
            $_SESSION['status'] = 'dosen';
            
            header("location: ".BASE_URL."tamplate/header.php");
        }
    }else{
        header("location: ".BASE_URL."view/login.php?notif=true");
    }
?>