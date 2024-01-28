<!--flight list-->
<?php
@include 'config.php';
session_start();
if(isset($_SESSION['user_name'])){
    
}
else{
header('location:login_form.php');
}
?>

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
            <li><a href="admin.php">Dashboard</a></li>
            <li><a href="flight.php"  class="active">Flight Details</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="U_details.php">User Details</a></li>
            <li><a href="../user/logout.php">Logout</a></li>
        </ul>
    </nav> 
    <div class="body-text"><h1>Flights List</h1></div>
    <br>
    <form>
    <div><a href="add.php" class="search">Add Flights</a></div>
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
                <th>Edit</th>
                <th>Delete</th>
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
                        <td><a href='edit.php?id=$row[id]&fno=$row[Flight_No]&fname=$row[Flight_Name]&des=$row[Destination]&org=$row[Origin]&dep=$row[Departure]&arr=$row[Arrival]&pre=$row[Premium]&first=$row[First]&eco=$row[Economy]&fre=$row[Frequency]'>Edit</a></td>
                        <td><a href='delete.php?id=$row[id]&fno=$row[Flight_No]&fname=$row[Flight_Name]&des=$row[Destination]&org=$row[Origin]&dep=$row[Departure]&arr=$row[Arrival]&pre=$row[Premium]&first=$row[First]&eco=$row[Economy]&fre=$row[Frequency]'>Delete</a></td>
                    </tr>";

                }
            ?>  
    </table>
</form>
</body>
</html>