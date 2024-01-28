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
            <li><a href="../home.html">Home</a></li>
            <li><a href="aero.php" class="active">Aeroplane</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    <div class="body-text"><h1>Search flights</h1></div>
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
                if(isset($_GET['search']))
                {
                    $filtervalues=$_GET['search'];
                    $query = "SELECT * FROM flightlist WHERE CONCAT(Flight_No, Flight_Name, Destination, Origin, Departure, Arrival, Frequency,Premium, First,Economy) LIKE '%$filtervalues%' ";
                    $query_run=mysqli_query($conn,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                            foreach($query_run as $row)
                            {
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