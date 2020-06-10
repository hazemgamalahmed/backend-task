<?php
$db = new user;
$userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : "sorry your data that you want to delete is not accessd";
$checkTheId = $db->checkAllData($userid);
if($checkTheId){
	$db->DeleteUser($userid);
}else{
	echo "sorry your data is not accessd";
}
?>