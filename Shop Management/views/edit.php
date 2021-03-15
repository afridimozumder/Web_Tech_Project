<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
	$username=$_SESSION['username'];
	$userinfo = getByName($username);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
				
					<td>Name</td>
					<td><input type="text" name="name" value="<?=$userinfo['name']?>"></td>
				</tr>

				<tr>
				    <td>Address</td>
				    <td><input type="text" name="address" value="<?=$userinfo['address']?>"></td>
			   </tr>

			   <tr>
				    <td>Contact Number</td>
				    <td><input type="text" name="contact_number" value="<?=$userinfo['contact_number']?>"></td>
			   </tr>

				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$userinfo['password']?>"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="text" name="confirm_password" value="<?=$userinfo['confirm_password']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$userinfo['id']?>">
						<input type="submit" name="edit" value="Update"> 
						<a href="all_users.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>