<?php
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['user_type'];

		if(empty($username) || empty($password)){
			header('location: ../view/login.php?error=null_value');
		}else{

			$user = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($user);

			if($status){
				$_SESSION['username'] = $username;
				if($usertype=='Customer'){
					header('location: ../view/customerhome.php');
				}
				elseif($usertype=='Admin'){
					header('location: ../view/adminhome.php');
				}
				elseif($usertype=='Manager'){
					header('location: ../view/(change logcheck).php');
				}
				else{
					header('location: ../view/(change logcheck).php');
				}

				
			}else{
				header('location: ../view/login.php?error=invalid_user');
			}
		}
	}



?>