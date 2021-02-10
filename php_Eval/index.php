<?php
require 'login.php';
?>
<form method="POST">
	<table>
		<tr>
			<td>
				<h3>Login</h3>
			</td>
		</tr>
		<tr>
			<td>
				<span>Email</span>
			</td>
		</tr>
		<tr>
			<td>
				<input type="email" name="user_email">
			</td>
		</tr>
		<tr>
			<td>
				<span>Password</span>
			</td>
		</tr>
		<tr>
			<td>
				<input type="password" name="user_password">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="login" value="Login">

				<input type="submit" name="register" value="Register">
			</td>
		</tr>
	</table>
</form>