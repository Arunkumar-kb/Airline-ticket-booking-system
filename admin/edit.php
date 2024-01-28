<!--Update Flight records-->
<?php
@include 'config.php';
if(!$conn){
    die('connection error'.mysqli_connect_error());
}
$id=$_GET['id'];
$fno=$_GET['fno'];
$fname=$_GET['fname'];
$des=$_GET['des'];
$org=$_GET['org'];
$dep=$_GET['dep'];
$arr=$_GET['arr'];
$pre=$_GET['pre'];
$first=$_GET['first'];
$eco=$_GET['eco'];
$fre=$_GET['fre'];
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
    <title>Edit</title>
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
                <h3 class="title">Flight Details</h3>
                <div class="inputbox">
                    <span>Flight No :</span>
                    <input type="text" name="fno" value="<?php echo "$fno" ?>">
                </div>
                <div class="inputbox">
                    <span>Flight Name :</span>
                    <input type="text" name="fname" value="<?php echo "$fname" ?>">
                </div>
                <div class="inputbox">
                    <span>Destination :</span>
                    <input type="text" name="des" value="<?php echo "$des" ?>" >
                </div>
                <div class="inputbox">
                    <span>Origin :</span>
                    <input type="text" name="org" value="<?php echo "$org" ?>">
                </div>
                <div class="inputbox">
                    <span>Departure Time :</span>
                    <input type="text" name="dep" value="<?php echo "$dep" ?>" >
                </div>
                <div class="inputbox">
                    <span>Arrival Time :</span>
                    <input type="text" name="arr" value="<?php echo "$arr" ?>" >
                </div>
                <div class="inputbox">
                    <span>Premium Cost:</span>
                    <input type="text" name="pre" value="<?php echo "$pre" ?>" >
                </div>
                <div class="inputbox">
                    <span>First Class Cost :</span>
                    <input type="text" name="first" value="<?php echo "$first" ?>" >
                </div>
                <div class="inputbox">
                    <span>Economy Cost :</span>
                    <input type="text" name="eco" value="<?php echo "$eco" ?>" >
                </div>
                <div class="inputbox">
                    <span>Frequency :</span>
                    <input type="text" name="fre" value="<?php echo "$fre" ?>" >
                </div>
                <input type="hidden" name="id" value="<?php echo "$id" ?>">
                <div class="inputbox">
                    <input type="submit" name="Update" value="submit">
                </div>
</div>
</div>
</form>
</div>
<?php
if(isset($_POST['Update'])){
include 'config.php';
$id=$_POST['id'];
$fno=$_POST['fno'];
$fname=$_POST['fname'];
$des=$_POST['des'];
$org=$_POST['org'];
$dep=$_POST['dep'];
$arr=$_POST['arr'];
$pre=$_POST['pre'];
$first=$_POST['first'];
$eco=$_POST['eco'];
$fre=$_POST['fre'];

$update= "UPDATE `flightlist` SET `Flight_No`='$fno',`Flight_Name`='$fname',`Destination`='$des',`Origin`='$org',`Departure`='$dep',`Arrival`='$arr',`Premium`='$pre',`First`='$first',`Economy`='$eco',`Frequency`='$fre' WHERE `id`='$id' ";
mysqli_query($conn,$update);
header('location:flight.php');
};
?>
</body>
</html>