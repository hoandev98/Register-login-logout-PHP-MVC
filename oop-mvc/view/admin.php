<?php
include('/opt/lampp/htdocs/oop-mvc/controller/c_user.php');
$c_user = new C_user();
$c_showUser = new C_user();
$c_update = new C_user();
//
$content = $c_user->showData();
$showUser = $content['showUser'];
$update = $c_update->update();
//print_r($showUser);

if(isset($_POST['save'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = $c_user->createAccount($firstname, $lastname, $email, $password);	
}
?>
<html>

<head>
	<title>Page Admin</title>
	<link rel="stylesheet" type="text/css" href="css/styleAdmin.css">
</head>

<body>
	<div>
		<h1 class="pageadmin">Manage User</h1>
	</div>

	<?php 
	if(isset($_SESSION['success'])):?>
	<div class="success">
		<?php
		echo $_SESSION['success'];
		unset($_SESSION['success']);
		?></div>
	<?php endif ?>

	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Password</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
		for($i = 0; $i < count($showUser);$i++){
			?>
			<tr>
				<td><?=$showUser[$i]->firstname?></td>
				<td><?=$showUser[$i]->lastname?></td>
				<td><?=$showUser[$i]->email?></td>
				<td><?=$showUser[$i]->password?></td>
				<td>
					<a href="#">Edit</a>
				</td>
				<td>
					<a href="#">Delete</a>
				</td>
			</tr>
			<?php } ?>

		</tbody>


	</table>

	<form method="post" action="#">

		<div class="input-group">
			<label>Firstname</label>
			<input type="text" name="firstname" value="">
		</div>
		<div class="input-group">
			<label>Lastname</label>
			<input type="text" name="lastname" value="">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="">
		</div>
		<div class="input-group">
			<?php if($update['edit_state'] == false):?>
			
			<button class="btn" type="submit" name="save">Create</button>
			<?php else: ?>
			<button class="btn" type="submit" name="update">Update</button>
			<?php endif ?>
		</div>
	</form>
</body>

</html>
