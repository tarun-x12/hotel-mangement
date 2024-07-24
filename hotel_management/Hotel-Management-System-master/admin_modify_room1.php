<!DOCTYPE html>
<html>
<head>
    <title>Admin Room Added</title>
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
<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
<body>
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="text-decoration: none;">DEVINE</a>
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
            <table class="basic_box">
                <tr>
                    <td>Admin Room Check-out date is updated successfully</td>
                </tr>
                <tr>
                    <td><a href="admin_view.php" style="color:#8c8c8c; text-decoration: underline;">Click here to get redirected.</a></td>
                </tr>
            </table>
        </div>
    </body>
</html>