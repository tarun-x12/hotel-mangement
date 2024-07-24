<!DOCTYPE html>
<html>
<head>
	<title>Admin Forgot Password</title>
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
		color:#8c8c8c
	}
	button, .button {
		background-color: #a6a6a6;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
        color:#000000;
        border-radius: 10px 10px 10px 10px;
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
	<br><br><br><br><br><br><br><br><br><br>
	<div style="background-color: rgba(20, 41, 54, 0.7);">
		<form method="post" action="admin_forgot_pwd1.php">
			<table>
				<tr>
						<td colspan="2"><p style="color:#8c8c8c""><b>Admin Forgot Password</b></p></td>
				</tr>
				<tr>
					<td>Enter UserID:</td>
					<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" required></td>
				</tr>
				<tr>
					<td>Enter EmployeeID:</td>
					<td><input class="input" type="text" name="empid" placeholder="Enter emp ID" required></td>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2"><input style="text-decoration: none;  font-size: 25px; color:rgb(82, 82, 82) background-color: #a6a6a6; border: 1px solid #a6a6a6;box-shadow: 2px 2px #a6a6a6; color:#000000;border-radius: 10px 10px 10px 10px;"  type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>