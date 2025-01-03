 <?php
 session_start();
$conn = new mysqli('localhost', 'root', '', 'personalized_management');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: selection.php');
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
    <h1>Log In</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required><br><br>
        <input type="password" name="password" placeholder="Enter Password                                                                            🔐" required><br><br>
        <button type="submit">Log In</button><br><br>
    </form>
    <a href="index.php">Back</a>
    </div>
    </center>
    
</body>
</html> 


