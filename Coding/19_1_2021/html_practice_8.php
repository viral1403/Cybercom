<!DOCTYPE html>
<html>
<head>
	<title>Html Practice 8</title>
	<link rel="stylesheet" href="html_practice_8.css">
</head>
<body>
	<form action="information.php" method="post">

		<!---
				Personal Info
		--->
		<h3><b>Personal Information</b></h3>
		<table class="personalInfo">
			<tr>
				<td>
					<span class="query">First Name:</span>
				</td>
				<td>
					<input type="text" name="firstName" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Last Name:</span>
				</td>
				<td>
					<input type="text" name="lastName">
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Date of Birth:</span>
				</td>
				<td>
					<select name="month" required>
						<option>Month</option>
						<option value="January">January</option>
						<option value="Febuary">Febuary</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>
					<select name="day" required>
						<option value="null">Day</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select name="year" required>
						<option>Year</option>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						<option value="1979">1979</option>
						<option value="1978">1978</option>
						<option value="1977">1977</option>
						<option value="1976">1976</option>
						<option value="1975">1975</option>
						<option value="1974">1974</option>
						<option value="1973">1973</option>
						<option value="1972">1972</option>
						<option value="1971">1971</option>
						<option value="1970">1970</option>
						<option value="1969">1969</option>
						<option value="1968">1968</option>
						<option value="1967">1967</option>
						<option value="1966">1966</option>
						<option value="1965">1965</option>
						<option value="1964">1964</option>
						<option value="1963">1963</option>
						<option value="1962">1962</option>
						<option value="1961">1961</option>
						<option value="1960">1960</option>
						<option value="1959">1959</option>
						<option value="1958">1958</option>
						<option value="1957">1957</option>
						<option value="1956">1956</option>
						<option value="1955">1955</option>
						<option value="1954">1954</option>
						<option value="1953">1953</option>
						<option value="1952">1952</option>
						<option value="1951">1951</option>
						<option value="1950">1950</option>
						<option value="1949">1949</option>
						<option value="1948">1948</option>
						<option value="1947">1947</option>
						<option value="1946">1946</option>
						<option value="1945">1945</option>
						<option value="1944">1944</option>
						<option value="1943">1943</option>
						<option value="1942">1942</option>
						<option value="1941">1941</option>
						<option value="1940">1940</option>
						<option value="1939">1939</option>
						<option value="1938">1938</option>
						<option value="1937">1937</option>
						<option value="1936">1936</option>
						<option value="1935">1935</option>
						<option value="1934">1934</option>
						<option value="1933">1933</option>
						<option value="1932">1932</option>
						<option value="1931">1931</option>
						<option value="1930">1930</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Gender:</span>
				</td>
				<td>
					<select name="gender" required>
						<option>Choose a gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
				</td>
			</tr>
		</table>

		<!---
			Account Information	
		--->
		<h3><b>Account Information</b></h3>
		<table class="accountInfo">
			<tr>
				<td>
					<span class="query">Email:</span>
				</td>
				<td>
					<input type="email" name="email" required><br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<span class="instructionText">(Your email address will be username)</span>
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Re-type Email:</span>
				</td>
				<td>
					<input type="email" name="reEmail" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Password:</span>
				</td>
				<td>
					<input type="password" name="password" required>
					<br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<span class="instructionText">(Min. 8 characters, 1 number, case sensitive)</span>
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Re-type Password:</span>
				</td>
				<td>
					<input type="password" name="rePassword" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Security Question:</span>
				</td>
				<td>
					<select name="securityQuestion">
						<option value="null">Choose a Security Question</option>
						<option value="dob">what is your DOB?</option>
						<option value="hometown">What is your Hometown Name?</option>
						<option value="fullname">What is Your FullName?</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Security Answer:</span>
				</td>
				<td>
					<input type="text" name="securityAnswer">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					 <span class="instructionText">(Not case-sensitive)</span>
				</td>
			</tr>
		</table>
		<!----
			Contact Info
		---->
		<h3><b>Contact Information</b></h3>
		<table class="contactInfo">
			<tr>
				<td>
					<span class="query">Address:</span>
				</td>
				<td>
					<input type="text" name="address">
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">City:</span>
				</td>
				<td>
					<input type="text" name="city">
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">State:</span>
				</td>
				<td>
					<select name="state">
						<option value="null">Choose a State</option>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar</option>
						<option value="Chandigarh">Chandigarh</option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
						<option value="Daman and Diu">Daman and Diu</option>
						<option value="Delhi">Delhi</option>
						<option value="Lakshadweep">Lakshadweep</option>
						<option value="Puducherry">Puducherry</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Odisha">Odisha</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Telangana">Telangana</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="Uttarakhand">Uttarakhand</option>
						<option value="West Bengal">West Bengal</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">ZipCode:</span>
				</td>
				<td>
					<input type="text" name="zipcode">
					<input type="text" name="zipcodeOp" placeholder="Optional">
				</td>
			</tr>
			<tr>
				<td>
					<span class="query">Phone</span>
				</td>
				<td>
					<input type="tel" name="phone" required>
					
					<select name="phoneType">
						<option value="mobile">Mobile</option>
						<option value="landLine">landLine</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<span class="instructionText">No spaces or dashes</span>
				</td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Submit">
		<input type="reset" name="reset" value="Reset">
	</form>
	<script>
		
	</script>
</body>
</html>