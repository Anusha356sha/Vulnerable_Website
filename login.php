<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/login.css">
    <title>Login Page</title>
</head>
<body>
    <header>
        <h1>Student Management System</h1>
    </header>
    <br><br>
    <div class="login-container">

        <h1>Login</h1>
        <form action="login.php" method="post">
            <b>Username</b>
            <input type="text" placeholder="Enter Username" name="username" required>
                <br><br>
            <label for="psw"><b>Password</b></label>

            <input type="password" placeholder="Enter Password" name="password">
            <br><br>
            <input type="submit" value="Login" name="login_Btn">
            <br>
        </form>
    </div>
    <center>Don't have an account?<a href="register.php" target="page">Register</a></center>
    <footer>
        <p>&copy; Student Management System</p>
    </footer>
</body>
</html>

<?php

require_once "config.php";
if(isset($_POST['login_Btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a statement
    $stmt = $conn->prepare("SELECT * FROM WebsiteLogin.users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    if($row = $result->fetch_assoc()){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:home.php');
        } else {
            echo '<div class="alert">Login Unsuccessful</div>';
        }
    }

    
}


