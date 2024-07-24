<html>
<head>
    <script>
        function showAlert(message) {
            alert(message);
            window.history.back(); // Go back to the previous page
        }
    </script>
</head>
<body>
<?php
$conn = new mysqli("localhost", "root", "", "iwp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$room = $_POST["rooms"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];
$ac = isset($_POST["ac"]) ? 1 : 0; // Convert boolean to integer for MySQL
$breakfast = isset($_POST["breakfast"]) ? 1 : 0; // Convert boolean to integer for MySQL
$lunch = isset($_POST["lunch"]) ? 1 : 0; // Convert boolean to integer for MySQL
$snacks = isset($_POST["snacks"]) ? 1 : 0; // Convert boolean to integer for MySQL
$dinner = isset($_POST["dinner"]) ? 1 : 0; // Convert boolean to integer for MySQL
$swimming = isset($_POST["swimming"]) ? 1 : 0; // Convert boolean to integer for MySQL
$in = strtotime($checkin);
$out = strtotime($checkout);
$diff = abs($out - $in); 
$years = floor($diff / (365*60*60*24));  
$months = floor(($diff - $years * 365*60*60*24)/(30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

// Get user details from temp_session table
$sql_temp_session = "SELECT * FROM temp_session";
$result_temp_session = mysqli_query($conn, $sql_temp_session);
if ($result_temp_session && mysqli_num_rows($result_temp_session) > 0) {
    $row_temp_session = mysqli_fetch_assoc($result_temp_session);
    $phone = $row_temp_session["phone"]; // Assuming "phone" is the column name in temp_session
    $name = $row_temp_session["name"]; // Assuming "name" is the column name in temp_session
    $id = $row_temp_session["idproof"]; // Assuming "id" is the column name in temp_session
} else {
    // Handle the case where fetching user details from temp_session fails
    die("Error fetching user details from temp_session: " . mysqli_error($conn));
}

$status = "Waiting";
$price = 0;

$sql_calculate_price = "SELECT calculatePrice('$room', '$days', $ac, $breakfast, $lunch, $snacks, $dinner, $swimming) AS price";
$result_calculate_price = mysqli_query($conn, $sql_calculate_price);
$row_calculate_price = mysqli_fetch_assoc($result_calculate_price);
$price = $row_calculate_price["price"];

$sql_get_available_rooms = "SELECT tot_rooms FROM rooms_count WHERE room_type = '$room'";
$result_available_rooms = mysqli_query($conn, $sql_get_available_rooms);
$row_available_rooms = mysqli_fetch_assoc($result_available_rooms);
$tot_rooms = $row_available_rooms["tot_rooms"];

// Check if there are already 5 bookings with conflicting dates for the selected room type
$sql_check_conflicts = "SELECT COUNT(*) AS num_conflicts FROM user_room_book WHERE room_type = '$room' AND ('$checkin' BETWEEN checkin AND checkout OR '$checkout' BETWEEN checkin AND checkout)";
$result_check_conflicts = mysqli_query($conn, $sql_check_conflicts);
$row_check_conflicts = mysqli_fetch_assoc($result_check_conflicts);
$num_conflicts = $row_check_conflicts["num_conflicts"];

if ($num_conflicts < $tot_rooms) {

    // Get the next available booking ID from book_id table
    $sql_book_id = "SELECT * from book_id";
    $result_book_id = mysqli_query($conn, $sql_book_id);
    $row_book_id = mysqli_fetch_assoc($result_book_id);
    $t = $row_book_id["book_id"];

    // Insert booking details into user_room_book table
    $sql_insert_booking = "INSERT INTO user_room_book 
    (phone, name, idproof, room_type, checkin, checkout, days, ac, breakfast, lunch, snacks, dinner, swimming, status, price, book_id) 
    VALUES 
    ('$phone', '$name', '$id', '$room', '$checkin', '$checkout', '$days', '".($ac ? 'true' : 'false')."', '".($breakfast ? 'true' : 'false')."', '".($lunch ? 'true' : 'false')."', '".($snacks ? 'true' : 'false')."', '".($dinner ? 'true' : 'false')."', '".($swimming ? 'true' : 'false')."', '$status', '$price', '$t')";

    mysqli_query($conn, $sql_insert_booking);

    // Increment booking ID and update book_id table
    $t++;
    $sql_update_book_id = "UPDATE book_id SET book_id='$t'";
    mysqli_query($conn, $sql_update_book_id);
    header("Location: bookroom2.php");
    exit();
} else {
    // Show an alert indicating that booking is not possible due to conflicts
    echo "<script>showAlert('HOTEL BOOKED FOR THE DATES!');</script>";
}
?>
</body>
</html>
