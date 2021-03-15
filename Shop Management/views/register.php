<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title align="center" >SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend align="center" style="font-size:40px">SignUp</legend>
			<table align="center" height="500" weight="560" bgcolor=#90949c>
			    <tr>
					<td>Name</td>
					<td><input type="text" placeholder="enter your name" name="name" size="40"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" placeholder=" enter your email" name="email" size="40"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" placeholder="enter your contact number" name="contact_number" size="40"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" placeholder="enter your username" size="40"></td>
				</tr>
				<tr>
				<td>Gender</td>
				<td>
				 <input type="radio" name="gender" value="male">male
				 <input type="radio" name="gender" value="female">female
				 <input type="radio" name="gender" value="other">Other			    
				</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td><input type="date" name="dob" size="1%"></td>
				</tr>
				<tr>
				<tr>
					<td>Address</td>
					<td><input type="text" placeholder="enter your Address" name="address" size="40"></td>
				</tr>
				<td>User Type</td>
				<td>
				<select name="user_type">
				<option name="user_type" value="Customer">Customer</option>
				<option name="user_type" value="admin">Admin</option>
				<option name="user_type" value="Employee">Employee</option>
				</select >
				</td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" placeholder="enter your password" size="40"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm_password" placeholder="enter your same password again" size="40"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>