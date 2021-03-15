<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'null_value'){
			echo "Username/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user'){
			echo "Invalid username or Password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "You have to login first...";
		}

	}else if(isset($_GET['success'])){
		
		if($_GET['success'] == 'registration_done'){
			echo "Registration Done! Now you can login...";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body background="images/sky2.jpg" link="#000" alink="#017bf5" vlink="#000">

<h3 align="center">
				<font face="sans-serif" size="6">VINTAGE</font>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<font face="sans" size="4">
					<a href="home.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#">ABOUT US</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#">HISTORY</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#">BLOG</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="#">CONTACT US</a>&nbsp;&nbsp;&nbsp;&nbsp;
				</font>
			</h3>
</h2>

	<form action="../php/logCheck.php" method="post">
		<fieldset align='center'>
			<legend>SignIn</legend>
			<table align='center'>
				<tr>
					<td>Login As:</td>
					<td>
						<select name="user_type">
							<option name="user_type" value="Admin">Admin</option>
							<option name="user_type" value="Customer">Customer</option>
							<option name="user_type" value="Manager">Manager</option>
							<option name="user_type" value="Salesman">Salesman</option>
						</select >
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<br>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<br>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				<tr>
					<td></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td></td>
					<td>Don't have an account?</td>
				</tr>
				<tr>
					<td></td>
					<td><font size="4"><a href="register.php">Signup</a></font></td>
				</tr>



			</table>
		</fieldset>
	</form>
</body>
</html>