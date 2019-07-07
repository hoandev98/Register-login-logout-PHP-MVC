<?php
include('/opt/lampp/htdocs/oop-mvc/model/database.php');
class M_admin extends database
{
	function register($ad_fullname, $ad_email, $ad_password){
		$sql = "INSERT INTO  admin (ad_fullname, ad_email, ad_password) VALUE(?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($ad_fullname, $ad_email, $ad_password));
		if($result){
			return $this->getlastId();
		}else{
			return false;
		}
	}
	function login($ad_email,$ad_password){
		$sql= "SELECT * FROM admin WHERE ad_email = '$ad_email' and ad_password = '$ad_password'";
		$this->setQuery($sql);
		return $this->loadRows(array($ad_email,$ad_password));
	}
	
}
?>