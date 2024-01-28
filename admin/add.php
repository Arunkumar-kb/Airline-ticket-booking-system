<!--Add flight records-->
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
    <title>Add Flights</title>
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
                    <input type="text" name="fno" required>
                </div>
                <div class="inputbox">
                    <span>Flight Name :</span>
                    <input type="text" name="fname" required>
                </div>
                <div class="inputbox">
                    <span>Destination :</span>
                    <input type="text" name="des" required>
                </div>
                <div class="inputbox">
                    <span>Origin :</span>
                    <input type="text" name="org" required>
                </div>
                <div class="inputbox">
                    <span>Departure Time :</span>
                    <input type="text" name="dep">
                </div>
                <div class="inputbox">
                    <span>Arrival Time :</span>
                    <input type="text" name="arr">
                </div>
                <div class="inputbox">
                    <span>Premium Cost:</span>
                    <input type="text" name="pre">
                </div>
                <div class="inputbox">
                    <span>First Class Cost :</span>
                    <input type="text" name="first">
                </div>
                <div class="inputbox">
                    <span>Economy Cost :</span>
                    <input type="text" name="eco">
                </div>
                <div class="inputbox">
                    <span>Frequency :</span>
                    <input type="text" name="fre">
                </div>
                <div class="inputbox">
                    <input type="submit" name="submit" value="Add Flight">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
if(isset($_POST['submit'])){
include 'config.php';
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

$add= "INSERT INTO `flightlist`(`Flight_No`, `Flight_Name`, `Destination`, `Origin`, `Departure`, `Arrival`, `Premium`, `First`, `Economy`, `Frequency`) VALUES ('$fno','$fname','$des','$org','$dep','$arr','$pre','$first','$eco','$fre')";
mysqli_query($conn,$add);
header('location:flight.php');
};
?>
</body>
</html>