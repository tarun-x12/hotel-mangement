<!DOCTYPE html>
<html>
<head>
    <title>Admin Booking History</title>
</head>
<style>
    body {
        margin: 0;
        background: #00050f;
        font-family: "Orbitron";
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

    table {
        font-size: 22px;
        width: 100%;
        border-collapse: collapse;
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

    button {
        background-color: #474747;
        color: #8c8c8c;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #333333;
    }

    /* Prevent line breaks in table cells */
    table.basic_box td, table.basic_box th {
        white-space: nowrap;
    }
</style>
<body>
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DEVINE</a>
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
        <p style="margin-left: 10%; margin-top: 5px; font-size: 28px;"></p>
            <table class="basic_box">
                <tr>
                    <td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Admin Booking History</b></p>
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
                $conn = new mysqli("localhost", "root", "", "iwp");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Call the stored procedure
                $sql = "CALL ProcessBookingHistory()";
                if ($result = $conn->query($sql)) {
                    // Fetch the processed results
                    $sql1 = "SELECT * FROM booked_hist";
                    if ($result1 = $conn->query($sql1)) {
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['book_id'] . "</td>"; // Use 'book_id' instead of 'id'
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['room_type'] . "</td>";
                            echo "<td>" . $row['checkin'] . "</td>";
                            echo "<td>" . $row['checkout'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>"; // Adjusted for the 'price' column
                            echo "</tr>";
                        }
                        $result1->free();
                    }
                }
                $conn->close();
            ?>

            </table><br><br>
            <table class="basic_box">
                <tr>
                    <td colspan="1">Enter Booking ID:</td>
                    <td colspan="2">
                        <form action="admin_room_history.php" method="post">
                            <input type="number" name="book_id" style="color: #8c8c8c; background-color: #474747;border-radius: 25px;">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: center;"><button type="submit">View Details</button></td></form>    
                </tr>
            </table>
        </div>
    </body>
</html>