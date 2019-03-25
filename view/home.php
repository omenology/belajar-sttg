<?php 
	session_start();

	var_dump($_SESSION)
    
?>

<div class="container">
	<a href="<?= BASE_URL.'module/loginlogout/logout.php'?>">Logout</a>
	<a href="<?= BASE_URL.'index.php?page=rekap_absen' ?>">rekap</a>
</div>