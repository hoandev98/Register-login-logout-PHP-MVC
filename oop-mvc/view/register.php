<?php
include('/opt/lampp/htdocs/oop-mvc/controller/c_user.php');
$c_user = new C_user();
if(isset($_POST['singup'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	if($password == $repassword){
		$user = $c_user->registerAccount($firstname, $lastname, $email, $password);
	}	
}
?>
<html>

<head>
	<title>Form User Registration</title>
</head>

<body>
	<div>
		<?php
		 if(isset($_SESSION['error'])){
			 echo"<div class = 'alert alert-danger'>".$_SESSION['error']."</div>";
		 } 
		 ?>
		<div id="form-Register">
			<form method="POST" action="#" >
				<table>
					<tr>
						<td colspan="2">Form Register</td>
					</tr>
					<tr>
						<td>First name :</td>
						<td><input type="text" id="firstname" name="firstname"></td>
					</tr>
					<tr>
						<td>Last name :</td>
						<td><input type="text" id="lastname" name="lastname"></td>
					</tr>
					<tr>
						<td>Email :</td>
						<td><input type="text" id="email" name="email"></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" id="pass" name="password"></td>
					</tr>
					<tr>
						<td>Retype Password :</td>
						<td><input type="password" id="repass" name="repassword"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="singup" value="Go"></td>
					</tr>

				</table>

			</form>
		</div>
	</div>
</body>

</html>
