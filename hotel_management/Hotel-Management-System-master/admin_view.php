<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Orbitron";
    }
	body {
	  margin: 0;
	  background:#00050f;
	}
    .container-fluid{
	    z-index: 1;
        height: 5rem;
        width:100%;
        margin:0%;
        background-color: rgba(0, 0, 0, 0.7);
        background-blend-mode: multiply;
        display: flex;
        flex-wrap: inherit;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top:0;
        border-radius: 0px 0px 10px 10px ;
    }
    .navbar-brand{
        font-size: 3.4375rem;
        margin-left: 1rem;
        font-family: "Playfair Display SC",serif;
        letter-spacing: 0.4375rem;
        color: #8c8c8c;
        -webkit-transition: color 2s linear;
        -moz-transition: color 2s linear;
        -o-transition: color 2s linear;
        -ms-transition: color 2s linear;
        transition: color 2s linear;
        text-decoration: none; 
    }
	table {
		font-size: 22px;
	}
	td {
		text-align: center;
	}
	#td1
	{
		background-color:rgba(0, 0, 0, 0.7);
	
	}
	.basic_box {
		
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
        background-color: rgba(20, 41, 54, 0.7);
        color: #8c8c8c;
		border-radius:25px;
	}
	th {
		font-weight: bold;
		padding-left: 15px;
        height:60px;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(0, 0, 0, 0.7);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: #8c8c8c;
	}
	li a {
	  	display: block;
	  	color: #8c8c8c;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}

	li a.active {
	  	background-color:rgba(20, 41, 54, 0.7);
	  	color: white;
	}

	li a:hover:not(.active) {
	  	background-color:rgba(20, 41, 54, 0.7);
	  	color: white;
	  	text-decoration: underline;
	}
</style>
<body>
	<div class="container-fluid">
        <a class="navbar-brand" href="index.php">DEVINE</a>
        </a>
    </div>
	<ul>
		<li><a href="admin_view.php" class="active">Rooms Info</a></li>
		<li><a href="add_room_admin.php">Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Check-IN</a></li>
		<li><a href="confirmed_bookings.php">Guest List</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Rooms Info</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Occupied Rooms</th>
					<th>Price</th>
				</tr>
			<?php 
			while ($row=mysqli_fetch_row($result))
    		{	?>	
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; 
			} ?></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>			
	</div>
</body>
</html>