<?php 
	include('connection.php');
?>
<?php
// Checks for login user
function login_check($email , $password){
	$user_query = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
	$con = mysqli_connect('localhost','root','','db');
	$query_run = mysqli_query($con,$user_query);

	if(mysqli_num_rows($query_run) >= 1){
		$date= date('Y-m-d h:m:s',time());;
		$session_id = mysqli_query($con,"SELECT `id` FROM `user` WHERE `email`='$email'");
		$update_login_query = "UPDATE `user` SET login_time='$date' WHERE `email`='$email'";
		return $session_id;
		
	}
	else{
		echo "User Does Not Exist";
	}
}


// Blog login Index.php

if(isset($_POST['login'])){
	if(isset($_POST['user_email']) && isset($_POST['user_password'])){
		$email = $_POST['user_email'];
		$password = $_POST['user_password'];
		$session_id = login_check($email,$password);
		$_SESSION['user']=$session_id;
		header('Location: blog_post.php');
	}
}
if(isset($_POST['register'])){
	header('Location: register.php');
}
?>