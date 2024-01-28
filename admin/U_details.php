<!--User list-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="../style/navstyle.css">
    <link rel = "stylesheet" href="../style/style.css">
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Document</title>
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
            <li><a href="history.php">History</a></li>
            <li><a href="U_details.php" class="active">User Details</a></li>
            <li><a href="../user/logout.php">Logout</a></li>
        </ul>
    </nav> 
    
    <div class="body-text"><h1>User Details</h1></div>
    <br>
    <form>
    <!--<div><a href="add.php" class="search">Add Flights</a></div>-->
    <br>
    <table class="table">
            <tr>
                <th></th>
                <th>Name</th>
                <th></th>
                <th></th>
                <th>Email</th>
                <th></th>
                <th></th>
                <th>User_Type</th>
                <th></th>
                <th></th>
                <th>Edit</th>
                <th></th>
                <th></th>
                <th>Delete</th>
                <th></th>
            </tr>
        
            <?php
                @include 'config.php';

                if(!$conn){
                    die('connection error'.mysqli_connect_error());
                }
                
                $sql = "SELECT * FROM user_form";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: ". $conn->error);
                }

                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                        <td></td>
                        <td>".$row['name']."</td>
                        <td></td><td></td>
                        <td>".$row['email']."</td>
                        <td></td><td></td>
                        <td>".$row['usertype']."</td>
                        <td></td><td></td>
                        <td><a href='u_edit.php?id=$row[id]&name=$row[name]&email=$row[email]&usertype=$row[usertype]'>Edit</a></td>
                        <td></td><td></td>
                        <td><a href='u_delete.php?id=$row[id]&name=$row[name]&email=$row[email]&usertype=$row[usertype]'>Delete</a></td>
                        <td></td>
                    </tr>";

                }
            ?>  
    </table>
</form>

</body>
</html>