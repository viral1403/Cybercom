<!DOCTYPE html>
<?php
?>
<html>
	<head>
		<title>Information Page</title>
		<style>
			table{
				justify-content: center;
				margin-top: 30px;
				margin-bottom: 30px;
			}
			table,tr,td{
				border: 1px solid black;
				border-collapse: collapse;
			}
			td:nth-child(1){
				font-weight: bold;
			}
			td:nth-child(2){
				color: blue;
			}
		</style>
	</head>
	
	<body>
		<table class="data">
			<tr>
				<td>First Name</td>
				<td>
					<?php echo $_POST['firstName'];?>
				</td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td>
					<?php echo $_POST['lastName'];?>
				</td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td>
					<?php echo $_POST['day'];?>
					/
					<?php echo $_POST['month'];?>
					/
					<?php echo $_POST['year'];?>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<?php echo $_POST['gender'];?>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<?php 
					if($_POST['email'] == $_POST['reEmail']){
						echo $_POST['email'];
					}
					else{
						echo 'error in password';
					}
					?>
				</td>
			</tr>
			<tr>
				<td>Security Question</td>
				<td>
					<?php
						echo $_POST['securityQuestion'];
					?>
				</td>
			</tr>
			<tr>
				<td>Security Answer</td>
				<td>
					<?php
					echo $_POST['securityAnswer'];
					?>
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<?php
					echo $_POST['address'];
					?>
				</td>
			</tr>
			<tr>
				<td>State</td>
				<td>
					<?php 
					echo $_POST['state'];
					?>
				</td>
			</tr>
			<tr>
				<td>Zipcode</td>
				<td>
					<?php echo $_POST['zipcode']?>
					if($_POST['zipcodeOp'] != ''){
						<?php echo $_POST['zipcodeOp']?>
					}
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>
					<?php 
					echo $_POST['phone'];
					?>
				</td>
			</tr>
			<tr>
				<td>Device</td>
				<td>
					<?php 
					echo $_POST['phoneType'];
					?>
				</td>
			</tr>
		</table>
	</body>
</html>