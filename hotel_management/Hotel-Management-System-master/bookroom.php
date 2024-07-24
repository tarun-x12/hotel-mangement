<!DOCTYPE html>
<html>
<head>
    <title>User Room Book</title>
    <style>
        body {
            margin: 0;
            background: #00050f;
            font-family: "Orbitron";
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
    </style>
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "iwp");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * from temp_session";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result);
    ?>
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
        <table class="basic_box">
            <tr>
                <th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: none;">Room Details</p></th>
            </tr>
            <tr>
                <th>Room Type</th>
                <th>Number of beds</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Single Bedded</td>
                <td>1</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>Double Bedded</td>
                <td>2</td>
                <td>1800</td>
            </tr>
            <tr>
                <td>Four Bedded</td>
                <td>4</td>
                <td>3000</td>
            </tr>
        </table><br><br>
        <form class="basic_box" action="bookroom1.php" method="post">
            <table>
                <br><br>
                <tr>
                    <td style="text-align: left;">Select room type:</td>
                    <td style="text-align: left;">
                        <select name="rooms" style="border-radius: 10px;background-color:#474747;color:#8c8c8c;" required>
                            <option value="">Select</option>
                            <option value="Single bed">Single bedded</option>
                            <option value="Double bed">Double bedded</option>
                            <option value="Four bed">Four bedded</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;">Enter check-in date:</td>
                    <td style="text-align: left;">
                        <input type="date" name="checkin" style="border-radius: 10px;background-color:#474747;color:#8c8c8c;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;">Enter check-out date:</td>
                    <td style="text-align: left;">
                        <input type="date" name="checkout" style="border-radius: 10px;background-color:#474747;color:#8c8c8c;">
                    </td>
                </tr>
            </table>
            <table>
                <br>
                <tr>
                    <th>Features</th>
                    <th>Service Cost per day</th>
                    <th> </th>
                </tr>
                <tr>
                    <td style="text-align: left;">AC</td>
                    <td style="text-align: center;">300</td>
                    <td><input type="checkbox" name="ac" value="on" style="background-color:#474747;"></td>
                </tr>
                <tr>
                    <td style="text-align: left;">Breakfast</td>
                    <td style="text-align: center;">150</td>
                    <td><input type="checkbox" name="breakfast" value="on" style="background-color:#474747;"></td>
                </tr>
                <tr>
                    <td style="text-align: left;">Lunch</td>
                    <td style="text-align: center;">300</td>
                    <td><input type="checkbox" name="lunch" value="on" style="background-color:#474747;"></td>
                </tr>
                <tr>
                    <td style="text-align: left;">Evening Snacks</td>
                    <td style="text-align: center;">120</td>
                    <td><input type="checkbox" name="snacks" value="on"></td>
                </tr>
                <tr>
                    <td style="text-align: left;">Dinner</td>
                    <td style="text-align: center;">250</td>
                    <td><input type="checkbox" name="dinner" value="on"></td>
                </tr>
                <tr>
                    <td style="text-align: left;">Swimming Pool Access</td>
                    <td style="text-align: center;">300</td>
                    <td><input type="checkbox" name="swimming" value="on"></td>
                </tr>
                <tr><br></tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" value="Submit" style="border-radius: 10px;background-color:#474747;color:#8c8c8c;"></td>
                </tr>
            </table>
        </form>
        <script>
            // JavaScript code for date restriction
            document.addEventListener('DOMContentLoaded', function() {
                // Get the current date
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;

                // Set the minimum value for check-in and check-out date inputs
                document.getElementsByName("checkin")[0].setAttribute("min", today);
                document.getElementsByName("checkout")[0].setAttribute("min", today);

                // Add event listener to check-in date input
                document.getElementsByName("checkin")[0].addEventListener('change', function() {
                    // Get the value of the check-in date input
                    var checkinDate = new Date(this.value);
                    // Increment check-in date by 1 day to set as minimum for checkout date
                    checkinDate.setDate(checkinDate.getDate() + 1);
                    // Format the minimum date for checkout input
                    var minCheckoutDate = checkinDate.toISOString().split('T')[0];
                    // Set the minimum value for checkout date input
                    document.getElementsByName("checkout")[0].setAttribute("min", minCheckoutDate);
                });
            });
        </script>

    </div>
</body>
</html>
