<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $mail=$_POST['email'];
    $date=$_POST['date'];
    $nop=$_POST['nop'];
    //$class=$_POST['class'];
    $fno=$_POST['fno'];
    $fname=$_POST['fname'];
    $des=$_POST['des'];
    $org=$_POST['origin'];
	$pre=$_POST['pre'];
	$first=$_POST['first'];
	$eco=$_POST['eco'];
	$time=$_POST['time'];
	/*$aadhar=$_POST['aadhar'];*/
//database connection
/*$conn=new mysqli('localhost','root','','user_db');
if($conn->connect_error){
echo "$conn->connect_error";
die("connection filed:".$conn->connect_error);
}
else{
$stmt=$conn->prepare("insert into booking(flight_no,flight_name,destination,origin,name,mobileno,email,date,noofperson,class)
 values(?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssss",$fno,$fname,$des,$org,$name,$mob,$email,$date,$nop,$class);
$execval=$stmt->execute();
$stmt->close();
$conn->close();
}*/

}
?>

<?php
	/*$pre=$_POST['pre'];
	$first=$_POST['first'];
	$eco=$_POST['eco'];
	$nop=$_POST['nop'];
	$cls=$_POST['class'];
	$fno=$_POST['fno'];
	$fname=$_POST['fname'];
	$des=$_POST['des'];*/
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/store.css">
</head>
<body>
	<script>
		function checkBoxLimit(){
			var chck= document.getElementsByName('seat[]');
			var limit = <?php echo json_encode($nop);?>;
			for(var i=0; i< chck.length; i++){
				chck[i].onclick = function(){
				var checkedcount = 0;
				for(var i=0; i<chck.length; i++){
					checkedcount += (chck[i].checked) ? 1 : 0;
				}
				if(checkedcount >limit){
					alert("you can select maximum of " +limit+ ".seats.");
					this.checked = false;
				}
				}
			}
		}
		
		</script>

    <form action="payment.php" method ="post">
	
    <div class="wholerow">
    <div class="wholecol">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Select your Seats</h2><BR>
				<div class="type">
					<label> Select your class : </label>
						<select name="class" class="select">
							<option value ="Premium">Premium</option>
							<option value ="First_Class">First Class</option>
							<option value ="Economy">Economy</option>
						</select>
				</div>
				<br>
                <div class="card-description">
					<ul>
						<li>
							<div class="bseat"></div>
							<h4>Booked</h4>
						</li>
						<li>
							<div class="aseat"></div>
							<h4>Available</h4>
						</li>
						<li>
							<div class="sseat"></div>
							<h4>Selected</h4>
						</li>
					</ul>
				</div>
			
				<div class="premium" value="premium2" name="prem">
                <hr class="mb-30">
				<div class = "classes">
					<h4 class="exit">&lt;&lt;EXIT</h4>
					<h3><u>Premium Class</u></h3>
					<h4 class="exit">EXIT&gt;&gt;</h4>
				</div>
                <div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="a1">
				  <span>A1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="a2">
				  <span>A2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="a3">
				  <span>A3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="a4">
				  <span>A4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="a5">
				  <span>A5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="a6">
				  <span>A6</span>
				</label>
				</div>
				<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="b1">
				  <span>B1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="b2">
				  <span>B2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="b3">
				  <span>B3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="b4">
				  <span>B4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="b5">
				  <span>B5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="b6">
				  <span>B6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="c1">
				  <span>C1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="c2">
				  <span>C2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="c3">
				  <span>C3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="c4">
				  <span>C4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="c5">
				  <span>C5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="c6">
				  <span>C6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="D1">
				  <span>D1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="D2">
				  <span>D2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="D3">
				  <span>D3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="D4">
				  <span>D4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="D5">
				  <span>D5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="D6">
				  <span>D6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="E1">
				  <span>E1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="E2">
				  <span>E2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="E3">
				  <span>E3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="E4">
				  <span>E4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="E5">
				  <span>E5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="E6">
				  <span>E6</span>
				</label>
			</div>
</div>
<h3><u>First Class</u></h3>
<div class="first" value="first2">
				<div class = "classes">
					<!--<h4 class="exit">&lt;&lt;EXIT</h4>-->
					
					<!--<h4 class="exit">EXIT&gt;&gt;</h4>-->
				</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="F1">
				  <span>F1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="F2">
				  <span>F2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="F3">
				  <span>F3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="F4">
				  <span>F4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="F5">
				  <span>F5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="F6">
				  <span>F6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="G1">
				  <span>G1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="G2">
				  <span>G2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="G3">
				  <span>G3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="G4">
				  <span>G4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="G5">
				  <span>G5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="G6">
				  <span>G6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="H1">
				  <span>H1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="H2">
				  <span>H2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="H3">
				  <span>H3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="H4">
				  <span>H4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="H5">
				  <span>H5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="H6">
				  <span>H6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="I1">
				  <span>I1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="I2">
				  <span>I2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="I3">
				  <span>I3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="I4">
				  <span>I4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="I5">
				  <span>I5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="I6">
				  <span>I6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="J1">
				  <span>J1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="J2">
				  <span>J2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="J3">
				  <span>J3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="J4">
				  <span>J4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="J5">
				  <span>J5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="J6">
				  <span>J6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="K1">
				  <span>K1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="K2">
				  <span>K2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="K3">
				  <span>K3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="K4">
				  <span>K4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="K5">
				  <span>K5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="K6">
				  <span>K6</span>
				</label>
</div>
</div>
<div class="eco" value="eco2">
				<div class = "classes">
					<h4 class="exit">&lt;&lt;EXIT</h4>
					<h3><u>Economy Class</u></h3>
					<h4 class="exit">EXIT&gt;&gt;</h4>
				</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="L1">
				  <span>L1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="L2">
				  <span>L2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="L3">
				  <span>L3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="L4">
				  <span>L4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="L5">
				  <span>L5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="L6">
				  <span>L6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="M1">
				  <span>M1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="M2">
				  <span>M2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="M3">
				  <span>M3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="M4">
				  <span>M4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="M5">
				  <span>M5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="M6">
				  <span>M6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="N1">
				  <span>N1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="N2">
				  <span>N2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="N3">
				  <span>N3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="N4">
				  <span>N4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="N5">
				  <span>N5</span>
				</label>

				<label class="check">
				  <input type="checkbox"name="seat[]" value="N6">
				  <span>N6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="O1">
				  <span>O1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="O2">
				  <span>O2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="O3">
				  <span>O3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="O4">
				  <span>O4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="O5">
				  <span>O5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="O6">
				  <span>O6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="P1">
				  <span>P1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="P2">
				  <span>P2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="P3">
				  <span>P3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="P4">
				  <span>P4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="P5">
				  <span>P5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="P6">
				  <span>P6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="Q1">
				  <span>Q1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="Q2">
				  <span>Q2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Q3">
				  <span>Q3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Q4">
				  <span>Q4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Q5">
				  <span>Q5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Q6">
				  <span>Q6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="R1">
				  <span>R1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="R2">
				  <span>R2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="R3">
				  <span>R3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="R4">
				  <span>R4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="R5">
				  <span>R5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="R6">
				  <span>R6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="S1">
				  <span>S1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="S2">
				  <span>S2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="S3">
				  <span>S3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="S4">
				  <span>S4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="S5">
				  <span>S5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="S6">
				  <span>S6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="T1">
				  <span>T1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="T2">
				  <span>T2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="T3">
				  <span>T3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="T4">
				  <span>T4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="T5">
				  <span>T5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="T6">
				  <span>T6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="U1">
				  <span>U1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="U2">
				  <span>U2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="U3">
				  <span>U3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="U4">
				  <span>U4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="U5">
				  <span>U5</span>
                </label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="U6">
				  <span>U6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="V1">
				  <span>V1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="V2">
				  <span>V2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="V3">
				  <span>V3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="V4">
				  <span>V4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="V5">
				  <span>V5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="V6">
				  <span>V6</span>
				</label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="X1">
				  <span>X1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="X2">
				  <span>X2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="X3">
				  <span>X3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="X4">
				  <span>X4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="X5">
				  <span>X5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="X6">
				  <span>X6</span>
                </label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="Y1">
				  <span>Y1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="Y2">
				  <span>Y2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Y3">
				  <span>Y3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Y4">
				  <span>Y4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Y5">
				  <span>Y5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Y6">
				  <span>Y6</span>
                </label>
</div>
<div class="row">
                <label class="check">
				  <input type="checkbox" name="seat[]" value="Z1">
				  <span>Z1</span>
				</label>
				<label class="check">
				  <input type="checkbox" name="seat[]" value="Z2">
				  <span>Z2</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Z3">
				  <span>Z3</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Z4">
				  <span>Z4</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Z5">
				  <span>Z5</span>
				</label>

				<label class="check">
				  <input type="checkbox" name="seat[]" value="Z6">
				  <span>Z6</span>
                </label>
</div>
				<div class = "classes">
					<h4 class="exit">&lt;&lt;EXIT</h4>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<h4 class="exit">EXIT&gt;&gt;</h4>
				</div>
</div>
<script type = "text/javascript">checkBoxLimit()</script>
		<input type="hidden" value="<?php echo $pre?>" name="pre">
        <input type="hidden" value="<?php echo $first?>" name="first">
        <input type="hidden" value="<?php echo $eco?>" name="eco">
		<input type="hidden" value="<?php echo $fno?>" name="fno">
		<input type="hidden" value="<?php echo $nop?>" name="nop">
		<input type="hidden" value="<?php echo $des?>" name="des">
		<input type="hidden" value="<?php echo $org?>" name="org">
		<input type="hidden" value="<?php echo $fname?>" name="fname">
        <input type="hidden" value="<?php echo $name?>" name="name">
		<input type="hidden" value="<?php echo $mob?>" name="mob">
		<input type="hidden" value="<?php echo $mail?>" name="mail">
		<input type="hidden" value="<?php echo $aadhar?>" name="aadhar">
		<input type="hidden" value="<?php echo $date?>" name="date">
		<input type="hidden" value="<?php echo $time?>" name="time">
<div class="submit">

<input type="submit" name="submit" value="Book" style= "
    padding: 10px;
    width:400px;
    margin-top:10px;
    background-color: #52206e;
    border: 1px solid #ddd;
    color: white;
    border-radius: 5px;
    cursor: pointer;">
</div>

     </form>
            </div>
        </div>
    </div>
</div>
<?php
$fno=$_POST['fno'];
    $seat="";
    $conn=new mysqli('localhost','root','','user_db');
    if($conn->connect_error){
    echo "$conn->connect_error";
    die("connection filed:".$conn->connect_error);
    }
    else{
        $sql="select * from seat where Flight_No='$fno'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=$result->fetch_assoc()){
                $seat=$row["seats"];
            }
        }
    }
    $seatss=explode(" ",$seat);
    ?>
   <script>
    var chck=document.getElementsByName('seat[]');
    var ak=<?php echo json_encode($seatss);?>;
    for(var i=0; i<ak.length;i++){
        for(var j=0; j<chck.length; j++){
            if(ak[i]==chck[j].value){
                chck[j].disabled=true;
            }
        }
        }
	</script>

	
</body>
</html>