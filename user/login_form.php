<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    //$usertype=($_POST['usertype']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);
    $usertype=mysqli_fetch_array($result);

    if(mysqli_num_rows($result)>0){
        if($usertype['usertype']=='admin'){
          $_SESSION['user_name']=$email;
          header('location:../admin/admin.php');
    }
    else if(($usertype['usertype']=='user')||($usertype['usertype']=='')){
          $_SESSION['user_name']=$email;
          header('location:../home.html');
      }
    }
    else{
        $error[]='incorrect email or password!';
    }

};




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login form</title>
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
            <h3><center>Login now</center></h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class = "error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <div><br></div>
            <input type="email" name = "email" required placeholder="Enter your Mail">
            <div><br></div>
            <input type="password" name = "password" required placeholder="Enter your password">
            <div><br></div>
            <input type="submit" name="submit" value="login now" class="form-btn">
            <center><p>don't have an account? <a href= "register_form.php">register now</a></p></center>
        </form>
    </div>
</body>
</html>