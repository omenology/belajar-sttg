<?php
session_start();
	include_once 'app/function/config.php';
	include_once 'app/function/parseUrl.php';

	$url = parseUrl($_GET['url']);

	$page = file_exists("app/view/$url[0].php") ? $url[0] : "home";
	
	include_once 'app/view/template/header.php';
	include_once "app/view/$page.php";
	include_once 'app/view/template/footer.php';


