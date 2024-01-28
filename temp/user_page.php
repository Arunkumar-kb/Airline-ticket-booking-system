<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="container">
    <div class = "content">
        <h3>Hi, <span>User</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['user_name']; ?></span></h1>
        <p>This is an User Page</p>
        <a href="login_form.php"class="btn">Login</a>
        <a href="register_form.php"class="btn">Register</a>
        <a href="logout.php"class="btn">Logout</a>
    </div>
</div>
</body>
</html>