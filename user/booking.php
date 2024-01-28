<?php
@include 'config.php';
if(!$conn){
    die('connection error'.mysqli_connect_error());
}
$fno=$_GET['fno'];
$fname=$_GET['fname'];
$des=$_GET['des'];
$org=$_GET['org'];
$pre=$_GET['pre'];
$first=$_GET['first'];
$eco=$_GET['eco'];
$dep=$_GET['dep'];
$arr=$_GET['arr'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel = "stylesheet" href="../style/navstyle.css">
    <link rel = "stylesheet" href="../style/book.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
            <li><a href="aero.php" class="active">Aeroplane</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    <div class="book">
        <div class="container">
            <header>booking Details </header>
            <form method="post" action="store.php">
                <div class="form">
                    <div class="details flight">
                        <span class="tittle">Flight Details</span>
                        <div class="fields">
                            <div class="inputbox">
                                <lable>Flight No :</lable>
                                <input type="text" name="fno" value="<?php echo "$fno" ?>" readonly>
                            </div>
                            
                            <div class="inputbox">
                                <lable>Destination :</lable>
                                <input type="text" name="des" value="<?php echo "$des" ?>" readonly>
                            </div>

                            <div class="inputbox">
                                <lable>Departure :</lable>
                                <input type="text" name="dep" value="<?php echo "$dep" ?>" readonly>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="inputbox">
                                <lable>Flight Name :</lable>
                                <input type="text" name="fname" value="<?php echo "$fname" ?>" readonly>
                            </div>
                            <div class="inputbox">
                                <lable>Origin :</lable>
                                <input type="text" name="origin" value="<?php echo "$org" ?>" readonly>
                            </div>
                            <div class="inputbox">
                                <lable>Arrival :</lable>
                                <input type="text" name="arr" value="<?php echo "$arr" ?>" readonly>
                            </div>
                    </div>  

                    <div class="details user">
                        <span class="tittle">User Details</span>
                        <div class="fields">
                            <div class="inputbox">
                                <lable>Name :</lable>
                                <input type="text" name="name" placeholder="Enter your name">
                            </div>
                            <div class="inputbox">
                                <lable>Email :</lable>
                                <input type="email" name="email" required placeholder="Enter Email">
                            </div>
                            <div class="inputbox">
                                <lable>Aadhar No :</lable>
                                <input type="number" name="pnum" pattern=[0-9]{12} placeholder="1111-2222-3333" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="inputbox">
                                <lable>Mobile No :</lable>
                                <input type="phone" name="mob" required placeholder="Enter Mobile No" pattern=[0-9]{10}>
                            </div>
                            <div class="inputbox">
                                <lable>Date :</lable>
                                <input type="date" name="date" id="inputdate" required>
                            </div>
                            <div class="inputbox">
                                <lable>No of Person :</lable>
                                <input type="number" name="nop" required placeholder="1" min="1" max="4">
                            </div>
                    </div>  
                </div>
                <div class="next">
                    <input type="submit" value="NEXT" name="submit">
                </div>  
            </form>
            <input type="hidden" value="<?php echo $pre?>" name="pre">
            <input type="hidden" value="<?php echo $first?>" name="first">
            <input type="hidden" value="<?php echo $eco?>" name="eco">
            <input type="hidden" value="<?php echo $dep?>" name="time">
            <div>
        </div>
    </div>
       <!--<div class="row">
            <div class="col">
                <h3 class="title">Flight Details</h3>
                <div class="inputbox">
                    <span>Flight No :</span>
                    <input type="text" name="fno" value="<?php echo "$fno" ?>" readonly>
                </div>
                <div class="inputbox">
                    <span>Flight Name :</span>
                    <input type="text" name="fname" value="<?php echo "$fname" ?>" readonly>
                </div>
                <div class="inputbox">
                    <span>Destination :</span>
                    <input type="text" name="des" value="<?php echo "$des" ?>" readonly>
                </div>
                <div class="inputbox">
                    <span>Origin :</span>
                    <input type="text" name="origin" value="<?php echo "$org" ?>" readonly>
                </div>
                <div class="flex">
                <div class="inputbox">
                    <span>No of Person :</span>
                    <input type="number" name="nop" required placeholder="1" min="1" max="4">
                </div>
                <div class="inputbox">
                    <span>Select Class :</span>
                    <select name='select'>
                        <option value="Premium">Premium</option>
                        <option value="First_Class">First Class</option>
                        <option value="Economy">Economy</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="col">
                <h3 class="title">User Details</h3>
                <div class="inputbox">
                    <span>Name :</span>
                    <input type="text" name="name" placeholder="Enter your name">
                </div>
                <div class="inputbox">
                    <span>Mobile No :</span>
                    <input type="phone" name="mob" required placeholder="Enter Mobile No" pattern=[0-9]{10}>
                </div>
                <div class="inputbox">
                    <span>Email :</span>
                    <input type="email" name="email" required placeholder="Enter Email">
                </div>
                <div class="inputbox">
                    <span>Passport No :</span>
                    <input type="number" name="pnum" pattern=".{8,}" placeholder="1111-2222" required>
                </div>
                <div class="inputbox">
                    <span>Date :</span>
                    <input type="date" name="date" required placeholder="Enter Date">
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo $pre?>" name="pre">
        <input type="hidden" value="<?php echo $first?>" name="first">
        <input type="hidden" value="<?php echo $eco?>" name="eco">
        <input type="hidden" value="<?php echo $time?>" name="time">
        <!-- for ticket details
        <input type="hidden" value="<?php echo $fname?>" name="fname">
        <input type="hidden" value="<?php echo $org?>" name="org">
        <input type="hidden" value="<?php echo $des?>" name="des">
        -->
        <!--<input type="submit" value="proceed to payment" class="submit" name="submit">
        </form>
    </div>-->
</body>
<script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#inputdate').attr('min', maxDate);
});
</script>
</html>


