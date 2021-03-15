<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
	$userinfo = getByName($_SESSION['username']);
	//echo $userinfo['name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
</h2>
    <h2 align='center'> Welcome <?=$userinfo['name']?></h2>
	<h3 align='center'>
    	<a href="../view/customerprofile.php"> | Profile</a> |<br><br> 
		<a href="../view/edit.php">| Edit User</a> |<br><br>
		<a href="../view/purchase_history.php"> | My Purchase History</a> |<br><br>
		<a href="../view/complain.php"> | Complain</a> |<br><br>
		<a href="../php/logout.php">| Logout</a> |<br>
		<br>
	<h3>


</body>
</html>