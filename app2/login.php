<?php
session_start();
// $students = ["id"=>1, "name"=>"adel", "age"=>26];
// echo "<ul>";
// foreach($students as $key => $value){
// 	echo "<li>".$key."=>".$value."</li>". "<br>";
// }
// echo "</ul>";


if($_SERVER['REQUEST_METHOD'] === "POST"){
	$ourStudents = [["id"=>1, "name"=>"ahmed", "age"=>25], 
                ["id"=>2, "name"=>"moaz", "age"=>27],
            ];
    $username = $_POST['username'];
    $goodUser = filter_var($username, FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $goodPass = sha1($password);
 for($i=0; $i < count($ourStudents); $i++){
 	// echo $ourStudents[$i]['name'];
 	if(in_array($ourStudents[$i]['name']===$goodUser, $ourStudents)){
 		$_SESSION['user'] = $goodUser;
 		header("Location:home.php");

 	}else{
 		echo "no";
 	}
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome login page</title>
</head>
<body>
	<form method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="username" placeholder="username"><br>
		<input type="password" name="password" placeholder="password"><br>
		<button>submit</button>
	</form>
</body>
</html>