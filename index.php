<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: selection.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(248, 227, 227);
            text-align:center;
            margin: 0;
        }
        .date-time {
            margin-top: 300px;
            font-size: 16px;
            color: #555;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Personalized Management System</h1><br><br>
    <marquee>Platform where you customize and manage your management</marquee>
    <p>If you are new, please sign up. If you are already registered, log in.</p><br><br>
    <a href="signup.php" class="button">Sign Up</a><br><br>
    <a href="login.php" class="button">Log In</a><br><br>
    <!-- <div class="login-container">
        <h1></h1> -->
        <div class="date-time" id="dateTimeDisplay">
            <!-- Date and time will be displayed here -->
        </div>
        <!-- <form action="selection.php" method="POST">
            <input type="text" placeholder="Username" required><br><br>
            <input type="password" placeholder="Password" required><br><br>
            <button type="submit" class="button">Log In</button>
        </form> -->
    </div>

    <script>
        // Function to display current date and time
        function displayDateTime() {
            const dateTimeDisplay = document.getElementById("dateTimeDisplay");
            const now = new Date();
            const formattedDateTime = now.toLocaleString(); // Format date and time
            dateTimeDisplay.textContent = `Current Date and Time: ${formattedDateTime}`;
        }

        // Call the function when the page loads
        window.onload = displayDateTime;
    </script>
</body>
</html>
