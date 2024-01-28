<?php
@include 'config.php';
session_start();
if(isset($_SESSION['user_name'])){}
else{
header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bus</title>
    <link rel = "stylesheet" href="navstyle.css">
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">ABT BOOKINGS</label>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="aero.php" >Aeroplane</a></li>
            <li><a href="bus.php"class="active">Bus</a></li>
            <li><a href="train.php">Train</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    <section></section>
    <div class="body-text"><h1>This is a bus page</h1></div>
</body>
</html>