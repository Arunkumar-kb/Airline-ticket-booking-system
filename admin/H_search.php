<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" href="../style/navstyle.css">
    <link rel = "stylesheet" href="../style/style.css">
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Search flights</title>
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
    <div class="body-text"><h1>Search</h1></div>
    <form action ="" method="GET">
        <div class="sbb">
        <div class="searchbox">
        <input type = "text" name="search" value="<?php if(isset($_GET['search'])) { echo $_GET['search']; } ?>" placeholder="search flight">
        <button class="button" type = "submit" value="submit">Search</button>
        </div>
        </div>
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
                if(isset($_GET['search']))
                {
                    $filtervalues=$_GET['search'];
                    $query = "SELECT * FROM ticket WHERE CONCAT(Name,Mail_ID,Flight_No,Flight_Name,Destination,Origin,Seat,Class,Date,Time) LIKE '%$filtervalues%' ";
                    $query_run=mysqli_query($conn,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                            foreach($query_run as $row)
                            {
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
                    }
                    else
                       {
                        ?>
                        <tr>
                            <td colspan="11"><center>No Records found</center></td>
                        </tr>
                        <?php
                    }
                }
            
            ?>
            <tr>
                <td></td>

    </div>
</body>
</html>