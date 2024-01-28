<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel = "stylesheet" href="../style/navstyle.css">
    <link rel = "stylesheet" href="../style/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <li><a href="admin.php" class="active">Dashboard</a></li>
            <li><a href="flight.php">Flight Details</a></li>
            <li><a href="B_history.php">History</a></li>
            <li><a href="U_details.php">User Details</a></li>
            <li><a href="../user/logout.php">Logout</a></li>
        </ul>
    </nav>
    
    <div class="body-text">
    <div class="frames">
        <div class="frame1">
            <i class="fa fa-plane" style="font-size:36px;"></i>
            <h2>Number of Flights</h2>
            <h3><?php 
                include 'config.php';
                if($conn->connect_error){
                    echo "$conn->connect_error";
                    die("connection failed:".$conn->connect_error);
                    }
                    else{
                        
                        $updatesql="SELECT * from flightlist";
                        if($result= mysqli_query($conn,$updatesql)){
                            $rowcount=mysqli_num_rows($result);
                            echo $rowcount;
                        }
                    }
            
            
            ?></h3>
        </div>
        
        <div class="frame2">
            <i class='fas fa-dollar-sign' style='font-size:36px'></i>
            <h2>Number of Users</h2>
            <h3><?php 
                include 'config.php';
                if($conn->connect_error){
                    echo "$conn->connect_error";
                    die("connection failed:".$conn->connect_error);
                    }
                    else{
                        
                        $updatesql="SELECT * FROM `user_form` WHERE usertype = 'user'";
                        if($result= mysqli_query($conn,$updatesql)){
                            $rowcount=mysqli_num_rows($result);
                            echo $rowcount;
                        } 
                    }
            ?></h3>
        </div>

        <div class="frame3">
            <i class="fa fa-graduation-cap" style="font-size:36px"></i>
            <h2>Number of Admins</h2>
            <h3><?php 
                include 'config.php';
                if($conn->connect_error){
                    echo "$conn->connect_error";
                    die("connection failed:".$conn->connect_error);
                    }
                    else{
                        
                        $updatesql="SELECT * FROM `user_form` WHERE usertype = 'admin'";
                        if($result= mysqli_query($conn,$updatesql)){
                            $rowcount=mysqli_num_rows($result);
                            echo $rowcount;
                        } 
                    }
            ?></h3>
        </div>
    </div>
    <div class="frames">
        <div class="frame11">
            <i class="fa fa-line-chart" style="font-size:36px"></i>
            <h2>Total Income</h2>
            <h3><?php 
                include 'config.php';
                if($conn->connect_error){
                    echo "$conn->connect_error";
                    die("connection failed:".$conn->connect_error);
                    }
                    else{
                        
                        $updatesql="SELECT sum(amount) AS total_sum FROM `pay`";
                        $result= mysqli_query($conn,$updatesql);
                        $row=mysqli_fetch_assoc($result);
                        $sum=$row['total_sum'];  
                        echo $sum;
                    }
            ?></h3>
        </div>
        
        <div class="frame12">
            <i class='far fa-gem' style='font-size:36px'></i>
            <h2>Number of Bookings</h2>
            <h3><?php 
                include 'config.php';
                if($conn->connect_error){
                    echo "$conn->connect_error";
                    die("connection failed:".$conn->connect_error);
                    }
                    else{
                        
                        $updatesql="SELECT * FROM `ticket`";
                        if($result= mysqli_query($conn,$updatesql)){
                            $rowcount=mysqli_num_rows($result);
                            echo $rowcount;
                        } 
                    }
            ?></h3>
        </div>
        </div>
</div>
        <!--<div class="frame3">
            <i class="fa fa-snowflake-o" style="font-size:36px"></i>
            <h2></h2>
            <p>Charter an entire jet, or offer the seats you don't need through our app a need for full or even
                fractional jet ownership</p>
        </div>-->

</body>
</html>