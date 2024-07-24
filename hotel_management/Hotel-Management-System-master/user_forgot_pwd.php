<!DOCTYPE html>
<html>
<head>
	<title>User Forgot Password</title>
</head>
<style>
	div {
		width: 50%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 25%;
		vertical-align: middle;
		font-size: 30px;
		padding-top: 30px;
		padding-bottom: 30px;
		border-radius: 20px;
        color: rgb(82, 82, 82);
	}
	body  {
	  	background-color: #00050f;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
	.button {
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
	<?php $email = 0;
		$dob = 0;
		?>
		<br><br><br><br><br>
	<div style="background-color: rgba(20, 41, 54, 0.7);">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; font-family: 'Times New Roman', serif; color:  #8c8c8c;"><b>User Forgot Password</b></p></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<form action="user_forgot_pwd1.php" method="post">
			<tr>
				<td>Enter User Email address: </td>
				<td><input class="input" type="email" name="email" placeholder="Enter email address" required></td>
			</tr>
			<tr><td><br></td>
			</tr>
			<tr>
				<td>Enter Date Of Birth:</td>
				<td> <input class="input" type="date" name="dob" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" type="submit" value="Recover Password"></td>
			</tr>
			</form>
		</table>
	</body>
</html>