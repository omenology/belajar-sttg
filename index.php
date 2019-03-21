<?php
	$page = isset($_GET['page']) ? $_GET['page'] : false; 
	include_once 'tamplate/header.php';
	if($page){
		include_once 'view/'.$page.'.php';	
	}else{
		include_once 'view/login.php';
	}
	
	include_once 'tamplate/footer.php';