<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
	$username=$_SESSION['username'];
    //echo $username;
	
	$userinfo = getByName($username);
	$my_id= $userinfo['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body background="images/sky2.jpg" link="#000" alink="#017bf5" vlink="#000">

<h3 align="center">
				<font face="sans-serif" size="6">VINTAGE</font>
				<br><br>

				<font size="4">
					<a href="home.php">BACK TO HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#">CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;
				</font>
				<br><br>

			</h3>

	<form action="../php/userController.php" method="post">
		<fieldset align="center">
			<legend>Complain</legend>
			<table align="center">
				<tr>
				
					<td>Complain type</td>
					<td><input type="text" name="complain_type" ></td>
				</tr>
				<tr>
					<td>Complain Description</td>
					<td><input type="text" name="description" width="40x" height="50x"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="user_id" value="<?=$userinfo['id']?>">
						<input type="submit" name="submit_complain" value="Submit"> 
						<a href="customerhome.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>




        <h3 align="center">My Complain List</h3>

	<table border="1" height="50x" align="center">
		<tr>
			<td>Complain Type</td>
			<td>Complain Description</td>
		</tr>

		<?php  
			$complain = getComplainById($my_id);
			for ($i=0; $i != count($complain); $i++) {  ?>
		<tr>
			<td><?=$complain[$i]['complain_type']?></td>
			<td><?=$complain[$i]['description']?></td>
		</tr>

		<?php } ?>
		
	</table>
	</form>
</body>
</html>