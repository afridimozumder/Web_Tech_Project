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
<body>
    <h1> Welcome <?=$userinfo['name']?></h1>
     <a href="../views/profile_picture.php">Profile Picture</a> |
	<a href="../views/edit.php">Edit User</a> |
	<a href="../views/purchase_history.php">My Purchase History</a> |
	<a href="../views/complain.php">Complain</a> |
	<a href="../php/logout.php">Logout</a> 

	<br>


</body>
</html>