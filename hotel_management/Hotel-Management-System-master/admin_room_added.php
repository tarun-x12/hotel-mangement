<html>
<?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$num = $_POST["noofrooms"];
	$r = $_POST["rooms"];
	$sql = "UPDATE rooms_count SET available_rooms = available_rooms+$num WHERE room_type='$r'";
	$sql1 = "UPDATE rooms_count SET tot_rooms = tot_rooms+$num WHERE room_type='$r'";
	if(mysqli_query($conn,$sql)&& mysqli_query($conn,$sql1))
	{
		header("Location: admin_room_added1.php");
	}
?>
</html>