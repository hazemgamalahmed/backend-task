<?php
class DatabaseConnection
{
	private $dsn = "mysql:host=localhost;dbname=acadimy";
	private $user = "root";
	private $password = "";

	public function __construct()
	{
		try{
					$this->con = new PDO($this->dsn, $this->user, $this->password);
		             // echo "you are connected";
		}catch(PDOException $err_message){
			echo "error connection ".$err_message->getMessage();
		}
	}
}
?>