<!DOCTYPE html>
<html>
<head>
	<title>User Found</title>
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
		padding-top: 30px;
		padding-bottom: 30px;
        color: #a6a6a6;
	}
	body  {
	  	background-color: #00050f;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	}
</style>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
	<div style="background-color: rgba(20, 41, 54, 0.7);">
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from temp";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
			$sql = "DELETE from temp";
			mysqli_query($conn, $sql);
			echo "Your password is: ".$row[0];
		?>
		<br><br>
		<a href="user_login.php" style="color: rgb(82, 82, 82);">Redirect to User Login</a>
	</div>
</body>
</html>