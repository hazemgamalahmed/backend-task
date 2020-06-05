<?php

require_once 'app/model/SortCounr.class.php';
require_once 'app/model/Calc.class.php';
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
?>