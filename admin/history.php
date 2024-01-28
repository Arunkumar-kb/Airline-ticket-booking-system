<!DOCTYPE html>
<html lang="en">
<head>
    <title>History</title>
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
            <li><a href="flight.php">Flight Details</a></li>
            <li><a href="history.php" class="active">History</a></li>
            <li><a href="U_details.php">User Details</a></li>
            <li><a href="../user/logout.php">Logout</a></li>
        </ul>
    </nav> 
    <div class="body-text"><h1>History</h1></div>
    <br>
    <form>
    <div><a href="H_search.php" class="search">Search</a></div>
    <br>
    <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Flight_No</th>
                <th>Flight_Name</th>
                <th>Destination</th>
                <th>Origin</th>
                <th>Seat</th>
                <th>Class</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
        
            <?php
                @include 'config.php';

                if(!$conn){
                    die('connection error'.mysqli_connect_error());
                }
                
                $sql = "SELECT * FROM ticket";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: ". $conn->error);
                }

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                        <td>".$row["Name"]."</td>
                        <td>".$row['Mail_ID']."</td>
                        <td>".$row['Flight_No']."</td>
                        <td>".$row['Flight_Name']."</td>
                        <td>".$row['Destination']."</td>
                        <td>".$row['Origin']."</td>
                        <td>".$row['Seat']."</td>
                        <td>".$row['Class']."</td>
                        <td>".$row['Date']."</td>
                        <td>".$row['Time']."</td>
                    </tr>";

                }
            ?>  
    </table>
</form>
</body>
</html>