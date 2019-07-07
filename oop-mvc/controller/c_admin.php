<?php
session_start();
include('/opt/lampp/htdocs/oop-mvc/model/m_admin.php');

class C_admin{
	function registerAccount($ad_fullname, $ad_email, $ad_password){
		$m_admin = new M_admin();
		$id_admin = $m_admin->register($ad_fullname, $ad_email, $ad_password);
		if($id_admin > 0){
			$_SESSION['success'] = "Success Registration";
			
	header('location:loginAdmin.php');
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']);
			}
		}else{
			$_SESSION['error'] = "Fail Registration";
			header('location:registerAdmin.php');
		}
	}
	
	public function loginAccount($ad_email, $ad_password){
		$m_admin = new M_admin();
		$admin = $m_admin->login($ad_email,$ad_password);
		if($admin == true){

			header('location:admin.php');
			if(isset($_SESSION['user_error'])){
				unset($_SESSION['user_error']);
			}
		}else{
			$_SESSION['user_error'] = "Wrong Infomation";
			header('location:loginAdmin.php');
		}
	}
	function logout(){
		session_destroy();
		header("location:index.php");
	}
}
