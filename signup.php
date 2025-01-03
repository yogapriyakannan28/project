<?php
session_start();

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'personalized_management');

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']); // Sanitize input
    $password = trim($_POST['password']); // Sanitize input

    if (!empty($username) && !empty($password)) {
        // Check if the user already exists
        $check_sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($check_sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User already exists
            echo "<script>alert('The username is already registered. Please log in.');</script>";
            echo "<script>window.location.href='login.php';</script>";
        } else {
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert data into the users table
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                echo "<script>alert('Signup successful! Redirecting to login...');</script>";
                echo "<script>window.location.href='login.php';</script>";
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        $stmt->close();
    } else {
        echo "<script>alert('Username and password cannot be empty.');</script>";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        .login-container {
            background-color: rgb(171, 244, 224);
            padding: 30px 50px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 200px auto;
            max-width: 400px;
        }
        .login-container h1 {
            font-family: Arial, sans-serif;
            color: #333;
        }
        .login-container [type=text],
        .login-container [type=password] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container [type=submit] {
            width: 100%;
            color: white;
            background-color: lightgreen;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container [type=submit]:hover {
            background-color: green;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <center>
        <div class="login-container">
            <h1>Sign Up</h1>
            <form method="POST">
                <input type="text" name="username" placeholder="Enter Username" required><br>
                <input type="password" name="password" placeholder="Enter Password" 
                    pattern=".{6,}" title="Password must be at least 6 characters long" required><br>
                <button type="submit">Sign up</button><br><br>
            </form>
            <a href="index.php">Back</a>
        </div>
    </center>
</body>
</html>
