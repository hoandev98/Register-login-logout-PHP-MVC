<?php
class database{
	var $_cursor = NULL;
	var $_dbh ='';
	var $_sql = '';
	public function database(){
		$servername = "localhost";
		$username = "root";
		$password = "";

		try {
    $this->_dbh = new PDO("mysql:host=$servername;dbname=oop-mvc", $username, $password);
    // set the PDO error mode to exception
    $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }
	}
	//
	public function setQuery($sql){
		$this->_sql = $sql;
	}
	//function execute the query
	public function execute($option = array()){
	$this->_cursor = $this->_dbh->prepare($this->_sql);
		if($option){
			for($i = 0;$i < count($option);$i++){
				$this->_cursor->bindParam($i+1,$option[$i]);
			}
		}
		$this->_cursor->execute();
		return $this->_cursor;
	}
	//function load data on table
	public function loadAllRows($option = array()){
		if(!$option){
			if(!$result = $this->execute())
				return false;
		}
		else{
			if(!$result = $this->execute($option))
				return false;
		}
		return $result->fetchAll(PDO::FETCH_OBJ);
	}
	//function load 1 data on tabele
	public function loadRows($option = array()){
		if(!$option){
			if(!$result = $this->execute())
				return false;
		}
		else{
			if(!$result = $this->execute($option))
				return false;
		}
		return $result->fetch(PDO::FETCH_OBJ);
	}
	public function getlastId(){
		return $this-> _dbh->lastInsertId();
	}
}
?>