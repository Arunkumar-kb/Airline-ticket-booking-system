<?php
if(isset($_POST['save'])){
    $pname=$_POST['pname'];
    $mail=$_POST['mail'];
    $cname=$_POST['cname'];
    $cnum=$_POST['cnum'];
    $expm=$_POST['expm'];
    $expy=$_POST['expy'];
    $cvv=$_POST['cvv'];
    $amount=$_POST['amount'];
    
    $fno=$_POST['fno'];
    $bseat=$_POST['bseat'];

    $nop=$_POST['nop'];
    $cls=$_POST['class'];
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $org=$_POST['org'];
    $des=$_POST['des'];
    $date=$_POST['date'];
    $mob=$_POST['mob'];
    $email=$_POST['email'];
    $aadhar=$_POST['aadhar'];

//database connection

$conn=new mysqli('localhost','root','','user_db');
if($conn->connect_error){
echo "$conn->connect_error";
die("connection failed:".$conn->connect_error);
}
else{
$stmt=$conn->prepare("insert into pay(name,email,cardname,cardnumber,expmonth,expyear,cvv,amount)
 values(?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssss",$pname,$email,$cname,$cnum,$expm,$expy,$cvv,$amount);
$execval=$stmt->execute();
$updatesql="UPDATE seat SET seats=CONCAT('$bseat',' ',seats) WHERE Flight_No='$fno'";
mysqli_query($conn,$updatesql);

$stmt=$conn->prepare("insert into booking(flight_no,flight_name,destination,origin,name,mobileno,email,date,noofperson,class)
 values(?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssss",$fno,$fname,$des,$org,$name,$mob,$email,$date,$nop,$cls);
$execval=$stmt->execute();
$stmt->close();
$conn->close();
}
};
?>





<?php
@include 'config.php';
if(!$conn){
    die('connection error'.mysqli_connect_error());
}
$fno=$_POST['fno'];            
$fname=$_POST['fname'];
$mail=$_POST['mail'];       
$des=$_POST['des'];                     
$org=$_POST['org'];            
$name=$_POST['name'];          
$bseat=$_POST['bseat'];        
$cls=$_POST['class'];          
$date=$_POST['date'];          
$time=$_POST['time'];          
$ticket= "INSERT INTO `ticket`(`Name`,`Mail_ID`,`Flight_No`, `Flight_Name`, `Destination`, `Origin`, `Seat`, `Class`, `Date`, `Time`) VALUES ('$name','$mail','$fno','$fname','$des','$org','$bseat','$cls','$date','$time')";
mysqli_query($conn,$ticket);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Flight Tickets</title>
  <link rel="stylesheet" href="../style/ticket.css">
  <style>
      a{
        position: absolute;
        padding: 7px 14px;
        text-decoration: none;
        font-size: 18px;
        background-color: #52206e;
        color: white;
        border-radius: 7px;
        top: calc(50% - 125px);
        top: -webkit-calc(50% - -225px);
        left: calc(50% - 500px);
        left: -webkit-calc(50% - 0px);
      }
      a:hover{
        background-color: rgb(132, 0, 255);
        color:white;
      }
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="box">
  <ul class="left">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  
  <ul class="right">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <div class="ticket">
    <span class="airline"><?php echo $fname ?></span>
    <span class="airline airlineslip"><?php echo $fname ?></span>
    <span class="boarding">Boarding pass</span>
    <div class="content">
      <span class="jfk"><?php echo $des ?></span>
      <span class="plane"><?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="60" width="60" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg"><g stroke="#222"><line fill="none" stroke-linecap="round" stroke-width="30" x1="300" x2="55" y1="390" y2="390"/><path d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z" fill="#222" stroke-linejoin="round" stroke-width="10"/></g></svg></span>
      <span class="sfo"><?php echo $org ?></span>
      
      <span class="jfk jfkslip"><?php echo $des ?></span>
      <span class="plane planeslip"><?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="50" width="450" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg"><g stroke="#222"><line fill="none" stroke-linecap="round" stroke-width="30" x1="300" x2="55" y1="390" y2="390"/><path d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z" fill="#222" stroke-linejoin="round" stroke-width="10"/></g></svg></span>
      <span class="sfo sfoslip"><?php echo $org ?></span>
      <div class="sub-content">
        <span class="watermark"><?php echo $fname ?></span>
        <span class="name">PASSENGER NAME<br><span><?php echo $name ?></span></span>
        <span class="flight">FLIGHT NO<br><span><?php echo $fno ?></span></span>
        <span class="gate">CLASS<br><span><?php echo $cls ?></span></span>
        <span class="seat">SEAT<br><span><?php echo $bseat ?></span></span>
        <span class="boardingtime">BOARDING TIME<br><span><?php echo $time." ".$date?></span></span>
            
         <span class="flight flightslip">FLIGHT NO<br><span><?php echo $fno ?></span></span>
          <span class="seat seatslip">SEAT<br><span><?php echo $bseat ?></span></span>
         <span class="name nameslip">PASSENGER NAME<br><span><?php echo $name ?></span></span>
      </div>
    </div>
    <div class="barcode"></div>
    <div class="barcode slip"></div>
  </div>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<div class="button1">
  <input type="submit" onclick="window.print()" value="Print Tickets">
</div>
<div class='search'>
<a href='../home.html' style="">Home</a>
</div>
</body>
</html>
