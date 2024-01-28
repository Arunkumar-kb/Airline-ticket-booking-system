<?php
	$seat='';
    if(isset($_POST['submit'])){
       
        $seat=$_POST['seat'];
        $bseat=implode(" ", $seat);
        $fno=$_POST['fno'];
        $fname=$_POST['fname'];
        $des=$_POST['des'];
	    $org=$_POST['org'];
	    $time=$_POST['time'];
        $date=$_POST['date'];
        $name=$_POST['name'];
        $mob=$_POST['mob'];
        $mail=$_POST['mail'];
        $aadhar=$_POST['aadhar'];
        /* $conn=new mysqli('localhost','root','','user_db');
    if($conn->connect_error){
    echo "$conn->connect_error";
    die("connection filed:".$conn->connect_error);
    }
    else{
        $updatesql="UPDATE seat SET seats=CONCAT('$bseat',' ',seats) WHERE Flight_No='$fno'";
        mysqli_query($conn,$updatesql);
    }*/
	//echo "<script>window.location.href='payment.php';</script>";
    }


?>

<?php
    if(!empty($_POST['class'])){
        $pre=$_POST['pre'];
        $first=$_POST['first'];
        $eco=$_POST['eco'];
        $nop=$_POST['nop'];
        $cls=$_POST['class'];
        if($cls=="Premium"){
            $amt=$nop*$pre;
        }

        else if($cls=="First_Class"){
            $amt=$nop*$first;
        }

        else{
            $amt=$nop*$eco;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="../style/navstyle.css">
    <link rel = "stylesheet" href="../style/payment.css">
</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">AD SUPERSONIC</label>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="aero.php" class="active">Aeroplane</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <form method="post" action="ticket.php">
            <input type ="hidden" value = "<?php echo $bseat ?>" name="bseat">
            <input type ="hidden" value = "<?php echo $fno ?>" name="fno">
            <input type ="hidden" value = "<?php echo $nop ?>" name="nop">
            <input type ="hidden" value = "<?php echo $cls ?>" name="class">
            <input type="hidden" value="<?php echo $des?>" name="des">
            <input type="hidden" value="<?php echo $fname?>" name="fname">
            <input type="hidden" value="<?php echo $org?>" name="org">
            <input type="hidden" value="<?php echo $name?>" name="name">
            <input type="hidden" value="<?php echo $date?>" name="date">
            <input type="hidden" value="<?php echo $time?>" name="time">
            <input type="hidden" value="<?php echo $mob?>" name="mob">
		<input type="hidden" value="<?php echo $mail?>" name="mail">
		<input type="hidden" value="<?php echo $aadhar?>" name="aadhar">
       <div class="row">
            <div class="col">
                <h3 class="title">Booking User Details</h3>
                <div class="inputbox">
                    <span>Full Name :</span>
                    <input type="text" name="pname" placeholder="John deo">
                </div>
                <div class="inputbox">
                    <span>Email :</span>
                    <input type="email" name="email" placeholder="example@gamil.com">
                </div>
                <div class="inputbox">
                    <span>Address :</span>
                    <input type="text" name="add" placeholder="room - street - locality">
                </div>
                <div class="inputbox">
                    <span>state :</span>
                    <input type="text" name="state" placeholder="Tamil Nadu">
                </div>
                <div class="flex">
                <div class="inputbox">
                    <span>zip code :</span>
                    <input type="zip" name="zip" placeholder="123 456">
                </div>
                <div class="inputbox">
                    <span>amount :</span>
                    <input type="text" value="<?php echo $amt ?>" name="amount"  readonly>
                </div>
                </div>

            </div>

            <div class="col">
                <h3 class="title">Payment</h3>
                <div class="inputbox">
                    <span>card accepted :</span>
                    <img src="../images/cards.jpeg" alt="cards">
                </div>
                <div class="inputbox">
                    <span>name on card :</span>
                    <input type="text" name="cname" placeholder="mr. john doe">
                </div>
                <div class="inputbox">
                    <span>credit card number :</span>
                    <input type="number" name="cnum" min='000000000001' max='999999999999' placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputbox">
                    <span>exp month :</span>
                    <input type="text" name="expm" placeholder="january">
                </div>
                <div class="flex">
                <div class="inputbox">
                    <span>exp year :</span>
                    <input type="number" name="expy" min="2022" max="2030" placeholder="2022">
                </div>
                <div class="inputbox">
                    <span>cvv :</span>
                    <input type="number" name="cvv" placeholder="1234">
                </div>
                </div>

            </div>
        </div>
        <input type="submit" value="proceed to checkout" name="save" class="submit">
        </form>
    </div>
</body>
</html>

