<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "personalized_management");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verify user credentials
    $query = "SELECT id FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];

        // Insert login time into the database
        $login_time = date("Y-m-d H:i:s");
        $user_id = $user['id'];
        $insert_query = "INSERT INTO user_activity (user_id, login_time) VALUES ('$user_id', '$login_time')";
        $conn->query($insert_query);

        // Redirect to the selection page
        header("Location: selection.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>