<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
	include "../php/profile_picturecheck.php";
	$userinfo = getByName($_SESSION['username']);
	//echo $userinfo['name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<!--<form action="../php/profile_picturecheck.php" method="post" enctype="multipart/form_data">-->
<fieldset>
    <legend>My profile Info</legend>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">


	<table cellpadding="0" cellspacing="0" align='center'>
    <tr>
        <td > <img width="300" src="../upload/image.png"></td>
	</tr>
    <tr>
		<td><input type="file" name="filetoupload"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
	</table>
           
</form>

    
    <table cellpadding="0" cellspacing="0" align='center'>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?=$userinfo['name']?></td>
				
			</tr>	
				
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?=$userinfo['email']?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?=$userinfo['gender']?></td>
				
			</tr>
			<tr><td colspan="3"><hr/></td></tr>	
             
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><?=$userinfo['address']?></td>
				
			</tr>
			<tr><td colspan="3"><hr/></td></tr>	

			<tr>
				<td>Contact No</td>
				<td>:</td>
				<td><?=$userinfo['contact_number']?></td>
				
			</tr>

			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Date of Birth</td>
				<td>:</td>
				<td><?=$userinfo['dob']?></td>
			</tr>
		</table>
		
		</fieldset>





</body>
</html>