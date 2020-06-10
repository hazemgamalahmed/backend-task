<?php
$db = new user;
// $idUser = $db->checkAllData();
if(isset($_GET['userid']) && is_numeric($_GET['userid'])){
	if($db->checkAllData($_GET['userid'])){
		$editor = $db->getByID($_GET['userid']);
		// echo $editor['username'];
		require_once 'update.view.php';
	}else{
		echo "sorry but your data is not Accessd in this server !";
	}
}else{
	echo "sorry you are not in this data";
}
?>