<?php
class User extends DatabaseConnection
{
	public $id;
	public $username;
	public $email;
	public $phone;
	public $message;

	public function setUserData($username, $email, $phone, $message)
	{
		// $this->id = $id;
		$this->username = $username;
		$this->email = $email;
		$this->phone = $phone;
		$this->message = $message;
	}
	public function setDataUpdated($id,$username, $email, $phone)
	{
		$this->id = $id;
		$this->username = $username;
		$this->email = $email;
		$this->phone = $phone;
	}
	public function checkExistsEmail()
	{
		$stmt = $this->con->prepare("SELECT email from users WHERE email = :email");
		$stmt->execute(['email'=>$this->email]);
		$data = $stmt->fetch();

		$count = $stmt->rowCount();
		if($count > 0){
			return true;
		}else{
			return false;
		}
	}
	public function InsertUserData()
	{
		$stmt = $this->con->prepare("INSERT INTO 
			                         users(username, email, phone, message)
			                         Values 
			                              (:user, :email, :phone, :message)
			                         ");
		$stmt->execute([
			'user'   => $this->username,
			'email'  => $this->email,
			'phone'  => $this->phone,
			'message'=> $this->message 
		]);

		// echo $stmt->rowCount() . " row inserted";
	}
	public function fetchAllData()
	{
		$stmt = $this->con->prepare("SELECT * FROM users");
		$stmt->execute();

		$users = $stmt->fetchAll();
		return $users;
	}

	public function userCount(){
		$stmt = $this->con->prepare("SELECT COUNT(id) FROM users");
		$stmt->execute();

		$myCount = $stmt->fetchColumn();
		return $myCount;
	}

	public function UpdateData()
	{
		// $stmt = $this->con->prepare('UPDATE users SET ');
	}
	public function checkAllData($id)
	{
		$stmt = $this->con->prepare("SELECT id FROM users WHERE id = :id");
		$stmt->execute(['id'=>$id]);
		$singleData = $stmt->fetch();
		$myRow = $stmt->rowCount();

		if($myRow > 0){
			return true;
		}else{
			return false;
		}

	}
	public function getByID($id)
	{
		// $stmt = $this->con->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
		// $stmt->execute(['id'=>$this->id]);

		// $singleData = $stmt->fetch();

		// return $singleData;
		$stmt = $this->con->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
		$stmt->execute(['id'=>$id]);
		$singleData = $stmt->fetch();

		return $singleData;

	}
	public function errorsMethod($username, $email, $phone){
		$error = [];

		if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) != true){
			$error[] = "sorry your email should be looked like example@example.com";
		}
		if(!empty($phone) && !is_numeric($phone)){
			$error[] = "sorry your phone must be numeric";
		}
		if(empty($username)){
			$error[] = "sorry your username is required";
		}

		if(empty($email)){
			$error[] = "sorry your email is required";
		}

		if(empty($phone)){
			$error[] = "sorry your phone is required";
		}
		return $error;
	}

	public function UpdateUserData()
	{
		$stmt = $this->con->prepare("UPDATE users SET 
			username = :name,
			 email = :email, 
			 phone = :phone WHERE id = :id");

		$stmt->execute([
			'name' =>$this->username,
			'email'=>$this->email,
			'phone' => $this->phone,
			'id'  => $this->id
		]);

		$count = $stmt->rowCount();
		echo $count . ' row updated';
	}

	public function DeleteUser($id)
	{
		$stmt = $this->con->prepare("DELETE FROM users WHERE id = :id");
		$stmt->bindParam("id", $id);
		$stmt->execute();
		$count = $stmt->rowCount();

		echo $count . " row deleted";
	}

}
?>