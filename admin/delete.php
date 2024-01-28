
<!--Delete Flight records-->
<?php
@include 'config.php';
include 'admin_navbar.php';
if(!$conn){
    die('connection error'.mysqli_connect_error());
}
$id=$_GET['id'];

$delete= "DELETE FROM `flightlist` WHERE `id`='$id' ";
mysqli_query($conn,$delete);
header('location:flight.php');
?>
