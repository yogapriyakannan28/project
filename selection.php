<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Page</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <p>Please choose an option:</p>
    <ul>
        <li><a href="flower_vendor.php">Flower Vendor</a></li>
        <li><a href="recruitment.php">Recruitment Process</a></li>
        <li><a href="pharmacy.php">Pharmacy Management</a></li>
    </ul>
    <a href="logout.php">Log Out</a>
</body>
</html>
