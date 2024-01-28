<?php
@include 'config.php';
session_start();
if(isset($_SESSION['user_name'])){
    
}
else{
header('location:login_form.php');
}
?>
<!--if(!$conn){
    die('connection error'.mysqli_connect_error());
}

$query="SELECT * FROM 'flight list' ";
$result = mysqli_query($conn,$query);
$numrow=mysqli_num_rows($result);
if($numrow>0){
        echo '<table class = "dbresult">';
        echo '<tr>';

            echo '<th>Flight No</th>';
            echo '<th>Flight Name</th>';
            echo '<th>Destination</th>';
            echo '<th>Origin</th>';
            echo '<th>Departure</th>';
            echo '<th>Arrival</th>';
            echo '<th>Frequency</th>';

        echo '</tr>';

         while($row = mysqli_fetch_assoc($result)){
            echo '<tr>';

            echo '<td>'.$row['Flight No'].'</td>';
            echo '<td>'. $row['Flight Name'].'</td>';
            echo '<td>'.$row['Destination'].'</td>';
            echo '<td>'.$row['Origin'].'</td>';
            echo '<td>'.$row['Departure'].'</td>';
            echo '<td>'.$row['Arrival'].'</td>';
            echo '<td>'.$row['Frequency'].'</td>';
    }

}
else{
    echo 'No records found';
}
?> 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aeroplane</title>
    <link rel = "stylesheet" href="../style/navstyle.css">
    <link rel = "stylesheet" href="../style/style.css">
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
            <li><a href="aero.php" class="active">Aeroplane</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    
    <div class="body-text"><h1>Flights List</h1></div>
    <br>
    <form>
    <div><a href="search.php" class="search">Search Flights</a></div>
    <br>
    <table class="table">
            <tr>
                <th>Flight No</th>
                <th>Flight Name</th>
                <th>Destination</th>
                <th>Origin</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Premium</th>
                <th>First Class</th>
                <th>Economy</th>
                <th>Frequency</th>
                <th>Book now</th>
            </tr>
        
            <?php
                @include 'config.php';

                if(!$conn){
                    die('connection error'.mysqli_connect_error());
                }
                
                $sql = "SELECT * FROM flightlist";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: ". $conn->error);
                }

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                        <td>".$row["Flight_No"]."</td>
                        <td>".$row['Flight_Name']."</td>
                        <td>".$row['Destination']."</td>
                        <td>".$row['Origin']."</td>
                        <td>".$row['Departure']."</td>
                        <td>".$row['Arrival']."</td>
                        <td>".$row['Premium']."</td>
                        <td>".$row['First']."</td>
                        <td>".$row['Economy']."</td>
                        <td>".$row['Frequency']."</td>
                        <td><a href='booking.php?fno=$row[Flight_No]&fname=$row[Flight_Name]&des=$row[Destination]&org=$row[Origin]&dep=$row[Departure]&arr=$row[Arrival]&pre=$row[Premium]&first=$row[First]&eco=$row[Economy]'>Book</a></td>
                    </tr>";

                }
            ?>  
    </table>
            </form>
</body>
</html>