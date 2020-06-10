<?php
$db = new user;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : "sorry your data is not Access";

$myCheckId = $db->checkAllData($userid);
if($myCheckId){

	$username =  $_POST['username'];
	$email =  $_POST['email'];
	$phone =  $_POST['phone'];
	$checked_errors = $db->errorsMethod($username, $email, $phone);
	if(!empty($checked_errors)){
		foreach($checked_errors as $err){
			echo $err.'<br>';
		}
	}else{
		$name = filter_var($username, FILTER_SANITIZE_STRING);
		$db->setDataUpdated($userid, $name, $email, $phone);
		$db->UpdateUserData();
	}
  }else{
}
}else{
	echo "sorry your account is not her";
}

?>