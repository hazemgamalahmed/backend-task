<?php
include 'public/tmblate/header.php';
require_once "init.php";
if(empty($_GET['p'])){
	$page = 'home';
}else{

$page = $_GET['p'];
}
switch ($page) {
	case 'home':
	    require_once 'pages/home.view.php';

	    break;

	default:
	    require_once 'pages/404.view.php';
}

include 'public/tmblate/footer.php';

?>