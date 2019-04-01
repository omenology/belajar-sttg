<?php
	$page = isset($_GET['page']) ? $_GET['page'] : false; 
	include_once 'app/template/header.php';
	if($page){
		include_once 'app/view/'.$page.'.php';	
	}else{
		include_once 'app/view/login.php';
	}
	
	include_once 'app/template/footer.php';