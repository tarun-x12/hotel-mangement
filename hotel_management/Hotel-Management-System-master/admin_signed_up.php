<?php
$conn = new mysqli("localhost", "root", "", "iwp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function verifyAdminPassword($entered_password, $conn) {
    $sql = "SELECT VerifyAdminPassword('$entered_password') AS match_found";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return (bool)$row["match_found"];
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_admin_password = $_POST["existing_admin_password"];
    
    // Check if the entered password matches any of the existing admin passwords
    if (!verifyAdminPassword($entered_admin_password, $conn)) {
        header("Location: admin_signed_up2.php"); // Redirect to failure page
        exit(); // Stop further execution
    }

    // Proceed with inserting the new admin login details
    $user = $_POST["adminid"];
    $pwd = $_POST["password"];
    $empid = $_POST["empid"];
    $sql_insert_admin = "INSERT INTO admin(adminid, password, empid) VALUES('$user', '$pwd', '$empid')";
    if ($conn->query($sql_insert_admin) === TRUE) {
        header("Location: admin_signed_up1.php"); // Redirect to success page
    } else {
        header("Location: admin_signed_up2.php"); // Redirect to failure page
    }
}
?>
