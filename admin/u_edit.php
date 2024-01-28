<!--user details edit-->
<?php
@include 'config.php';
if(!$conn){
    die('connection error'.mysqli_connect_error());
}
$id=$_GET['id'];
$name=$_GET['name'];
$email=$_GET['email'];
$usertype=$_GET['usertype'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="../style/navstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../style/payment.css">
    <title>U_Edit</title>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">AD SUPERSONIC</label>
        <ul>
            <li><a href="admin.php" >Dashboard</a></li>
            <li><a href="flight.php" class="active">Flight Details</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="U_details.php">User Details</a></li>
            <li><a href="../user/logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <form method="post" action="">
       <div class="row">
            <div class="col">
                <h3 class="title">User Details</h3>
                <div class="inputbox">
                    <span>Name :</span>
                    <input type="text" name="name" value="<?php echo "$name" ?>">
                </div>
                <div class="inputbox">
                    <span>Email :</span>
                    <input type="email" name="email" value="<?php echo "$email" ?>">
                </div>
                <div class="inputbox">
                    <span>User type :</span>
                    <input type="text" name="usertype" value="<?php echo "$usertype" ?>" >
                </div>
                <input type="hidden" name="id" value="<?php echo "$id" ?>">
                <div class="inputbox">
                    <input type="submit" name="Update" value="submit">
                </div>
            </div>
        </div>       
    </div>
</form>
<?php
if(isset($_POST['Update'])){
include 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$usertype=$_POST['usertype'];

$update= "UPDATE `user_form` SET `id`='$id',`name`='$name',`email`='$email',`usertype`='$usertype' WHERE `id`='$id' ";
mysqli_query($conn,$update);
header('location:U_details.php');
};
?>
</body>
</html>
