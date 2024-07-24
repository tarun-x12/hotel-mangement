<!DOCTYPE html>
<html>
<head>
	<title>User Payment</title>
</head>
<style>
	 body {
        margin: 0;
        background: #00050f;
        font-family: "Orbitron";
    }

    table {
        font-size: 22px;
        width: 100%;
    }

    td, th {
        text-align: center;
        color: #8c8c8c;
        padding: 15px;
    }

    .basic_box {
        border-radius: 15px;
        margin: auto;
        width: 600px;
        padding: 50px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19);
        background-color: rgba(20, 41, 54, 0.7);
        color: #8c8c8c;
    }

    #td1 {
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        border: 10px;
        margin-top: -10px;
        padding: 10px;
        text-align: center;
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
        background-color: rgba(20, 41, 54, 0.7);
        color: white;
    }

    li a:hover:not(.active) {
        background-color: rgba(20, 41, 54, 0.7);
        color: white;
        text-decoration: underline;
    }

    a {
        text-decoration: none;
        color: #8c8c8c;
    }

    a:hover {
        text-decoration: underline;
    }

    .container-fluid {
        z-index: 1;
        height: 5rem;
        width: 100%;
        margin: 0%;
        background-color: rgba(0, 0, 0, 0.7);
        background-blend-mode: multiply;
        display: flex;
        flex-wrap: inherit;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        top: 0;
        border-radius: 0px 0px 10px 10px;
    }

    .navbar-brand {
        font-size: 3.4375rem;
        margin-left: 1rem;
        font-family: "Playfair Display SC", serif;
        letter-spacing: 0.4375rem;
        color: #8c8c8c;
        text-decoration: none;
    }
    table.basic_box td, table.basic_box th {
        white-space: nowrap;
    }
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<div class="container-fluid">
    <a class="navbar-brand" style="text-decoration: none;">DEVINE</a>
    <a class="access" style="margin-right: 20px;font-size: 40px; text-decoration: none;">Hello, <?php echo $row[2]; ?></a>
</div>
<ul>
		<li><a href="user_view.php" class="active">My Info</a></li>
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
			<div><table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: none;"><b>Check-OUT</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
                    $phone = $row[0];
					$sql1 = "SELECT * FROM confirmed_booking WHERE phone = '$phone'";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		?>
				    		<td><?php echo $row[14]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[13]; ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
				<tr></tr>
				<tr>
					<td colspan="2">Enter Booking ID:</td>
					<td colspan="2">
						<form action="payment.php" method="post">
							<input type="number" name="book_id"  style="border-radius: 10px;background-color:#474747;color:#8c8c8c;">
					</td>
					<td style="text-align: center;"><button type="submit"  style="border-radius: 10px;background-color:#474747;color:#8c8c8c;">Pay Now</button></td>
				</tr>
				
		</table><br></div>
	</div>
</body>
</html>