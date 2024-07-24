<!DOCTYPE html>
<html>
<head>
	<title>New User SignUp</title>
</head>

<style>
	div {
		width: 40%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 30%;
		vertical-align: middle;
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		color: rgb(82, 82, 82);
		border: 10px solidrgb(82, 82, 82);
	}
	body  {
	  	background-color: #00050f;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: #a6a6a6;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
        color:#000000;
        border-radius: 10px 10px 10px 10px;
		font-size: 25px;

	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
        border-radius: 10px 10px 10px 10px;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #000000;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br><br><br>
	<div style="background-color:rgba(20, 41, 54, 0.7);">
		<form action="user_signed_up.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color: #8c8c8c;"><b>New User SignUp</b></p></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Name: </td>
					<td><input class="input" type="text" name="name" placeholder="Enter Name" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Phone Number: </td>
					<td><input class="input" type="number" name="phone" placeholder="Enter Number" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Password: </td>
					<td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Email ID: </td>
					<td><input class="input" type="email" name="email" placeholder="Enter Email" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">ID Proof: </td>
					<td><input class="input" type="text" name="idproof" placeholder="Enter ID Proof" required></td>
				</tr>
				<tr>
					<td style="padding-left: 60px; text-align: left;">Date of birth: </td>
					<td><input class="input" type="date" name="dob" value="01-01-2000" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input class="button" type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div> 
</body>
</html>