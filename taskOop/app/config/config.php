<?php
class DatabaseConnect
{
	private $dsn      = "mysql:host=localhost;dbname=lms";
	private $username = "root";
	private $pass     = "";

	// bulid a function to get Connected

	public function __construct()
	{
		try{
			$this->con = new PDO($this->dsn, $this->username, $this->pass);
			echo "you are connected";
		}
		catch(PDOException $e){
			echo "faild ".$e->getMessage();
		}
	}
}

// $myData = new DatabaseConnect();
?>