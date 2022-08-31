<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "bus_details.css">
</head>
<body>
<div class="logoutbtn">
    <a href = "logout.php"><button  type="button" class="btn btn-success">Logout</button></a>
  </div>
    <section class="contain">
    <?php
    include 'navbar.php';
     include 'config.php';
        
        $origin = $_POST['Origin'];
        $destination = $_POST['Destination'];
        $date = $_POST['Date'];
        $req =$_POST['Seats'];
         
        // print_r($_POST);exit;
        $sel="SELECT * FROM bus_info WHERE Origin = '$origin' and Destination = '$destination' and Date = '$date'";

        //   print_r($sel);exit;
        $exe = mysqli_query($conn,$sel);
        $rows = mysqli_num_rows($exe);
        // print_r($row);exit;
        echo '<div class = "box">';
        if($rows==0){
            echo '<h3 style= "text-align:center;"> <font color="red">No available buses</h3>';
        }else {
            echo '<h3 style= "text-align:center;"> <font color="green"><center>Availabe Buses</center></font></h3>';
            echo '<table align ="center" class = "table1" >
            <tr>
            <th>Id</th>
            <th>Name of the bus</th>
            <th>Available seats</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Date of travelling</th>
            <th>Arrival Time</th>
            <th>Departure Time</th>
            <th>Fare</th>
            <th>Book</th>
            </tr>';
            while ($rows = mysqli_fetch_array($exe)) {
                $busId = $rows['bus_id'];
                $totalFare = $rows['fare']*$req;
                echo "<tr>";

	echo "<td>".$busId."</td>";
	echo "<td>".$rows['busname']."</td>";
	echo "<td>".$rows['seats']."</td>";
	echo "<td>".$rows['origin']."</td>";
	echo "<td>".$rows['destination']."</td>";
	echo "<td>".$rows['date']."</td>";
	echo "<td>".$rows['arrival_time']."</td>";
	echo "<td>".$rows['departure_time']."</td>";
	echo "<td>".$rows['fare']."</td>";
	echo "<td>";
    // echo $busId;exit;
	echo '<a href="payment.php?Seats_no='.$req.'& Bus_id='.$busId.'& Total_fare='.$totalFare.'">Book Now</a>';
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
        echo '</div>';
           
        }

        // print_r($_SESSION);exit;
    ?>
    </section>
   


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>