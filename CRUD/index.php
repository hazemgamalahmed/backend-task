<?php
require_once "init.php";
require_once "public/tmblate/header.php";
if(empty($_GET['power'])){
	$page = 'home';
}else{
	$page = $_GET['power'];
}

switch ($page) {
	case 'home':
		require_once 'pages/home.view.php';
		break;
	case 'about':
		require_once 'pages/about.view.php';
		break;
	case 'contact':
		require_once 'pages/contact.view.php';
		break;
		case 'edit':
		require_once 'pages/edit.view.php';
		break;
		case 'delete':
		require_once 'pages/delete.view.php';
		break;
		case 'modify':
		require_once 'pages/modify.view.php';
		break;
	case 'admin':
	     require_once 'pages/admin.veiw.php';
	default:
		require_once 'pages/404.view.php';
		break;
}

require_once "public/tmblate/footer.php";
?>