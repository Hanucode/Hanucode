<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <h2 align="center">Login Page</h2><br>
    <div class="login">
    <form id="login" method="get" action="login.php">
        <label><b>Name</b></label>
        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password</b></label>
        <input type="Password" name="Pass" id="Pass" placeholder="Password">
        <br><br>
        <input type="button" name="log" id="log" value="Log In Here">
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
        Forgot <a href="#">Password</a>
    </form>
    </div>
</body>
</html>
<?php
ob_start();
session_start();

// Connect with database
$con = new mysqli("localhost", "root", "", "food");

// Check connection
if ($con->connect_error) {
    exit('Failed to connect to MySQL: ' . $con->connect_error);
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // check if the account exists in the database
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Verify the password
        if (password_verify($_POST['password'], $password)) {
            // Create sessions
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: profile.php');
            exit;
        } else {
            echo 'Incorrect Password';
        }
    } else {
        echo 'Incorrect Username';
    }
    $stmt->close();
}
?>