<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		LOG IN
	</title>
</head>
<body background="images/sky2.jpg" link="#000" alink="#017bf5" vlink="#000">

<h2><a href="home.php">Back to Home</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
	
</h2>


<br>
<div class="contact">
			<hr color="#000" width="20%">
				<p align="center"><font face="sans-serif" color="#017bf5" size="5.5">LOG IN</font></p>
			<hr color="#000" width="20%">
			<br><br>
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

			<p>Please select your gender:</p>
  				<input type="radio" id="student" name="usertype" value="student">
  				<label for="student">Student</label><br>
  				<input type="radio" id="user" name="usertype" value="user">
  				<label for="user">User</label><br>


				<table align="center" cellpadding="5" cellspacing="5" border="1" height="200">
					<tr>
						<td>
    						<input type="text" name="username" placeholder="Enter Your Username" required="required" >
						</td>
					</tr>
					<tr>
						<td>
    						<input type="password" name="password" placeholder="Enter Your Password" required="required">
						</td>
					</tr>
					<tr>
						<th>
							<input type="submit" name="login" value="LOGIN">
						</th>
					</tr>
				</table>
				<br>
				<table align="center">
					<tr>
						<td><a href="registration.php">Don't have an account?</a></td>
					</tr>
				<table>
			</form>

			<br>
			<?php
			
			
 ?>
		</div> 

<?php echo $error; ?>

</body>
</html>