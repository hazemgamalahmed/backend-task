<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$username = $_POST['username'];
	$phone   = $_POST['phone'];
	$email   = $_POST['email'];
	$password = $_POST['password'];

	echo "welcome " . $username . " your phone is ". $phone . " and your email is ".$email;  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label>name</label>
		<input type="text" name="username" placeholder="username"><br>
		<label>phone</label>
		<input type="text" name="phone" placeholder="phone"><br />
		<label>email</label>
		<input type="email" name="email" placeholder="email">
		<br>
		<label>password</label>
		<input type="password" name="password" placeholder="password">
		<label>re confirm password</label>
		<input type="password" name="password" placeholder="password">
		<button>sign up</button>
	</form>
</body>
</html>