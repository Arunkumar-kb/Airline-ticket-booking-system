<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
    $usertype=($_POST['usertype']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0){
        $error[]='user already exist!';
    }else{
        if($pass != $cpass){
            $error[]='password not matched!';
        }else{
            $insert = "INSERT INTO user_form(name,email,password,usertype) values('$name','$email','$pass','$usertype')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }

};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register form</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel = "stylesheet" href="../style/navstyle.css">
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
   
</head>

<body>

<nav>

        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">AD SUPERSONIC</label>
        <ul>
            <li><a href="../home.html">Home</a></li>
            <li><a href="aero.php">Aeroplane</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="login_form.php" class="active">Sign Up</a></li>
        </ul>
    </nav>


    <div class="form-container">
        <form action="" method="post">
            <h3><center>register now</center></h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class = "error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <div><br></div>
            <input type="text" name = "name" required placeholder="Enter your Name">
            <div><br></div>
            <input type="email" name = "email" required placeholder="Enter your Mail">
            <div><br></div>
            <input type="password" name = "password" required placeholder="Enter your password">
            <div><br></div>
            <input type="password" name = "cpassword" required placeholder="Confirm your password">
            <div><br></div>
            <input type="hidden" name = "usertype" placeholder="usertype" value='user'>
            <div><br></div>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <center><p>already have an account? <a href= "login_form.php">login now</a></p></center>
        </form>
    </div>
</body>
</html>