<?php
session_start();
session_destroy();
header('Location: index.php');
exit;
?> 
<!-- <?php
// Database connection
$conn = new mysqli("localhost", "root", "", "personalized_management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Record logout time and calculate duration
    $logout_time = date("Y-m-d H:i:s");
    $query = "SELECT login_time FROM user_activity WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $login_time = $row['login_time'];

        // Calculate duration
        $login_time_obj = new DateTime($login_time);
        $logout_time_obj = new DateTime($logout_time);
        $duration = $login_time_obj->diff($logout_time_obj)->format('%H:%I:%S');

        // Update the logout time and duration
        $update_query = "UPDATE user_activity SET logout_time='$logout_time', duration='$duration' WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1";
        $conn->query($update_query);

        // Clear session
        session_destroy();
       
        echo "You have logged out. Duration: $duration";
        header('Location: index.php');
    }
}
?> -->
