<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$color = $_POST['color'];
	$website = implode(' , ', $_POST['website']);
	$gender = $_POST['gander'];
	$data = $_POST['date'];
	$dataLocal = $_POST['local'];
	$userid = $_POST['id'];
	$telephone = $_POST['telephone'];
	$age = $_POST['age'];
	$range = $_POST['range'];
	$url = $_POST['link'];
	echo "welcome ".$username . " your email is " . $email." and your password is ". $password . " and your color is ".$color . " and your websites is ".$website ." and your gander is " . $gender . " and your date is " . $data."and your id is ".$userid . "<br>". "and your telephone number is " . $telephone ."<br>"." and your date local is ". $dataLocal . "<br>" . "and your age is ". $age . "<br />" . " and your range is " . $range . "<br >" . "and your url is ". $url;



}else{

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome to our forms</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="hidden" name="id" value="userid">
		<label>Name :</label>
		<input type="text" name="username" placeholder="enter your name"><br />
		<label>Email:</label>
		<input type="Email" name="email" placeholder="enter your email"><br>
		<label>Password</label>
		<input type="password" name="password" placeholder="enter your password"><br>
		<label>your color</label>
		<input type="color" name="color" placeholder="enter your color"><br>
		<label>your prefer interests</label><br>
		<input type="checkbox" name="website[]" value="facebook"> facebook <br>
		<input type="checkbox" name="website[]" value="twiter"> twiter <br>
		<input type="checkbox" name="website[]" value="insta"> insta <br>
		<label>your gender</label><br>
		<input type="radio" name="gander" value="male">male<br>
		<input type="radio" name="gander" value="female">male<br>
		<label>enter your date</label>
		<input type="date" name="date"><br /><br />
		<label>datetime locale: </label>
        <input type="datetime-local" name="local"><br>
        <label>your phone number</label>
        <input type="tel" name="telephone"><br>
        <label>enter your age</label>
        <input type="number" name="age"><br>
        <label>your range</label>
        <input type="range" name="range" min="5" max="10"><br>
        <label>your url</label>
        <input type="url" name="link"><br>
        <label>your file please</label>
        <input type="file" name="your file">
        <input type="reset">
		<input type="submit" name="submit" value="submit">

	</form>
</body>
</html>