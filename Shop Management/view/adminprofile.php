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
      <tr><td>.<td></tr>
      <tr>
				<td><a href="home.php">Home</a></td>
				<td><a href="../php/logout.php">LogOut</a></td>
			</tr>
		</table>
		
		</fieldset>





</body>
</html>








<?php
//include('../control/db.php');
//session_start(); 

//if(empty($_SESSION["username"])) // Destroying All Sessions
  //{
    //header("Location: ../control/login.php"); // Redirecting To Home Page
  //}
?>

<!--<!DOCTYPE html>
<html>
<body>
  <h2>Profile Page</h2>

    Hii, <h3>
    <?php //echo $_SESSION["username"];?></h3>
  <br/>Your Profile Page. -->

<?php
  //$connection = new db();
  //$conobj=$connection->OpenCon();

  //$userQuery=$connection->ShowAll($conobj,"student");

//if ($userQuery->num_rows > 0) {
  //  echo "<table><tr><th>Name</th><th>Email</th><th>Address</th><th>Profession</th></tr>";
    // output data of each row
    //while($row = $userQuery->fetch_assoc()) {
      //echo "<tr><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["profession"]."</td></tr>";
    //}
    //echo "</table>";
  //} else {
    //echo "0 results";
  //}

?>







<!--</body></html>-->