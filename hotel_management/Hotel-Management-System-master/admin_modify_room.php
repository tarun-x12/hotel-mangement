<html>
<head>
    <script>
        function showAlert(message) {
            alert(message);
            window.history.back(); // Go back to the previous page
        }
    </script>
</head>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$bid = $_POST["book_id"];
	$checkout = $_POST["checkout"];
	$sql = "SELECT * FROM confirmed_booking WHERE book_id='$bid'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_row($result);
	$checkin = $row[4];
	$in = strtotime($checkin);
	$out = strtotime($checkout);
	$diff = abs($out - $in); 
	$years = floor($diff / (365*60*60*24));  
	$months = floor(($diff - $years * 365*60*60*24)/(30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	$price = 0;
	if(strcmp($row[3], "Single bed")==0)
	{
		$price = 1000;
	}
	else if(strcmp($row[3], "Double bed")==0)
	{
		$price = 1800;
	}
	else if(strcmp($row[3], "Four bed")==0)
	{
		$price = 3000;
	}
	$row[13] = $row[13] - $price*$row[6] + $price*$days;

	$sql_get_available_rooms = "SELECT tot_rooms FROM rooms_count WHERE room_type = '$room'";
$result_available_rooms = mysqli_query($conn, $sql_get_available_rooms);
$row_available_rooms = mysqli_fetch_assoc($result_available_rooms);
$tot_rooms = $row_available_rooms["tot_rooms"];

$sql_check_conflicts = "SELECT COUNT(*) AS num_conflicts FROM user_room_book WHERE room_type = '$room' AND ('$checkin' BETWEEN checkin AND checkout OR '$checkout' BETWEEN checkin AND checkout)";
$result_check_conflicts = mysqli_query($conn, $sql_check_conflicts);
$row_check_conflicts = mysqli_fetch_assoc($result_check_conflicts);
$num_conflicts = $row_check_conflicts["num_conflicts"];
if ($num_conflicts < $tot_rooms) {
	$sql = "UPDATE confirmed_booking SET checkout='$checkout', days='$days', price='$row[13]' WHERE book_id='$bid'";
	mysqli_query($conn,$sql);
	header("Location: admin_modify_room1.php");
	exit();
}
else {
    // Show an alert indicating that booking is not possible due to conflicts
    echo "<script>showAlert('HOTEL BOOKED FOR THE DATES!');</script>";
}
	?>
</html>