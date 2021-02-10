<?php 
	include('connection.php');

	// check if user registering already exists
	function register_check($email){
		$user_query = "SELECT * FROM `user` WHERE `email`='$email'";
		$con = mysqli_connect('localhost','root','','db');
		$query_run = mysqli_query($con,$user_query);

		if(mysqli_num_rows($query_run) >= 1){
			return true;
		}
	}
?>

<?php
// Registration Form 
if(isset($_POST['register_submit'])){
	if(isset($_POST['terms'])){
		if(isset($_POST['reg_firstname']) && isset($_POST['reg_lastname']) && isset($_POST['reg_password']) && isset($_POST['reg_confirm_password']) && isset($_POST['reg_email']) && isset($_POST['reg_prefix']) && isset($_POST['reg_mobile_number']) && isset($_POST['reg_info']) ){
			if(!empty($_POST['reg_firstname']) && !empty($_POST['reg_lastname']) && !empty($_POST['reg_password']) && !empty($_POST['reg_confirm_password']) && !empty($_POST['reg_email']) && !empty($_POST['reg_prefix']) && !empty($_POST['reg_mobile_number']) && !empty($_POST['reg_info']) ){
			
				$prefix = $_POST['reg_prefix'];
				$fname = $_POST['reg_firstname'];
				$lname = $_POST['reg_lastname'];
				$pass = $_POST['reg_password'];
				$confirm_pass = $_POST['reg_confirm_password'];
				$email = $_POST['reg_email'];
				$mobile_number = $_POST['reg_mobile_number'];
				$info = $_POST['reg_info'];
				$createDate = date('Y-m-d h:m:s',time());
				$loginDate = date('Y-m-d h:m:s',time());
				if(register_check($email)){
					echo 'User Already Exists';
				}
				else if($pass !== $confirm_pass){
					echo 'Password Does Not Match';
				}
				else{
					$pass_hash = md5($pass);
					$reg_query = "INSERT INTO `user`(`prefix`, `firstname`, `lastname`, `email`, `password`, `mobile_number`, `information`, `create_time`) VALUES ('$prefix','$fname','$lname','$email','$pass_hash','$mobile_number','$info','$createDate')";

					$run_reg_query = mysqli_query($con,$reg_query);

					$session_id = mysqli_query($con,"SELECT `id` FROM `user` WHERE `email`='$email'");
					$_SESSION['user'] = $session_id;
					if($run_reg_query){
						session_start();
						header('Location: blog_post.php');
					}
				}
			}
			else{
				echo "All Fields are Required";
			}
		}
	}
	else{
		echo "Terms and Conditions Not Accepted";
	}
}

?>

<form action="register.php" method="POST">
	<table>
		<tr>
			<td>
				<input type="hidden" name="id">
			</td>
		</tr>
		<tr>
			<td>
				<span>Prefix</span>
			</td>
			<td>
				<select name="reg_prefix">
					<option value=""></option>
					<option value="Mr.">Mr.</option>
					<option value="Ms.">Ms.</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<span>First Name</span>
			</td>
			<td>
				<input type="text" name="reg_firstname">
			</td>
		</tr>
		<tr>
			<td>
				<span>Last Name</span>
			</td>
			<td>
				<input type="text" name="reg_lastname">
			</td>
		</tr>
		<tr>
			<td>
				<span>Email</span>
			</td>
			<td>
				<input type="email" name="reg_email">
			</td>
		</tr>
		<tr>
			<td>
				<span>Mobile Number</span>
			</td>
			<td>
				<input type="tel" name="reg_mobile_number">
			</td>
		</tr>
		<tr>
			<td>
				<span>Password</span>
			</td>
			<td>
				<input type="password" name="reg_password">
			</td>
		</tr>
		<tr>
			<td>
				<span>Confirm Password</span>
			</td>
			<td>
				<input type="password" name="reg_confirm_password">
			</td>
		</tr>
		<tr>
			<td>
				<span>Information</span>
			</td>
			<td>
				<textarea name="reg_info"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="checkbox" name="terms">
				<span>Hereby, I Accept Terms & Conditions.</span>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="register_submit">
			</td>
		</tr>
	</table>
</form>