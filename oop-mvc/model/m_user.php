<?php
include('model/database.php');
class M_user extends database
{
	function register($firstname, $lastname, $email, $password){
		$sql = "INSERT INTO  users (firstname, lastname, email, password) VALUE(?,?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($firstname, $lastname, $email, $password));
		if($result){
			return $this->getlastId();
		}else{
			return false;
		}
	}
	function login($email,$password){
		$sql= "SELECT * FROM users WHERE email = '$email' and password = '$password'";
		$this->setQuery($sql);
		return $this->loadRows(array($email,$password));
	}
	function getData(){
		$sql = "SELECT * FROM users";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	//
	function updateUser($firstname, $lastname, $email, $password){
		$sql = "UPDATE users SET firstname ='$firstname',lastname = '$lastname',email = '$email',password = '$password' WHERE id = '$id'";
		$this->setQuery($sql);
		$result = $this->execute(array($firstname, $lastname, $email, $password));
		if($result){
			return $this->getlastId();
		}else{
			return false;
		
	}
	}
}
?>
