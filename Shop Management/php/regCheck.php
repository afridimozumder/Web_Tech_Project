<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){
        $name = $_POST['name'];
		$email = $_POST['email'];
		$contact_number = $_POST['contact_number'];
		$username 	= $_POST['username'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$user_type = $_POST['user_type'];
		$password 	= $_POST['password'];
		$confirm_password 		= $_POST['confirm_password'];
		$valid = FALSE;
		$exist_email= getByEmail($email);
		$exist_username= getByName($username);
		//echo $exist_username['username'];
		
		if(empty($name) || empty($email) || empty($contact_number) || empty($username) || empty($gender) ||empty($dob) ||empty($address) ||empty($user_type) || empty($password) || empty($confirm_password)){
			
			header('location: ../views/register.php?error=null_value');
		}
		elseif(strlen($password)<6 && strlen($password)>10)
		{
			echo "Password should be between 6 to 10 !!!";
		}

		elseif (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			echo "Name should be letter";
		  }

		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo"Invalid email format";
		  }


		




		elseif($password!=$confirm_password)
		{
            echo "password and confirm password is not matching!";
		}


		elseif(strlen($contact_number)!=11)
		{
			echo "please enter valid mobile number";
			
		}


		elseif(!is_numeric($contact_number))
		{
			echo "Number should be numeric value";
		}


		elseif(is_numeric($name))
		{
			echo "Name cannot be numeric value";
		}

		elseif($email==$exist_email['email'])
		{
			echo "email already exist";
		}

		elseif($username==$exist_username['username'])
		{
			echo "Username already exist";
		}


		
		else{
			$register = [
				'name' => $name,
				'email' => $email,
				'contact_number' =>$contact_number,
				'username'=> $username,
				'gender'=>$gender,
				'dob'=>$dob,
				'address'=>$address,
				'user_type'=>$user_type,
				'password'=> $password,
				'confirm_password'=> $confirm_password
			];

			$status = insert($register);

			if($status){
				header('location: ../views/login.php?success=registration_done');
			}else{
				header('location: ../views/register.php?error=db_error');
			}
		}
	}



?>