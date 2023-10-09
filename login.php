<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylelog.css"/>
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <title>Login Form</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <span id="blue">FIT</span>FREAK</a>
            </div>
            <div class="icon">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
    
        </nav>
    </header>
    <form method="POST" action="logic.php" target="_blank" class="login_form">
        <div class="user_logo">
            <i class="fa fa-user"></i>
        </div>
        <h1>Login</h1>
        <label for="name" class="user">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter Username" required>
        <label for="password" class="user">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter Password" required>
        <div class="checkbox_container">
            <input type="checkbox" id="checkbox">
            <a href="#"><label for="checkbox">Remember me</label></a>
        </div>
        <input type="submit" value="Login" name="submit">
        <div class="more">
            <label for=""><a href=""#>Forgot your password?</a>
            </label>
        </div>
    </form> 
</body>
</html>