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
<section class="contain">
    <div class="row ">
        <div class="col-md-12">
        <?php
include 'navbar.php';
include 'config.php';
if(isset($_POST['Submit'])){
    $start = $_POST['Origin'];
    $end = $_POST['Destination'];
    $date = $_POST['Date'];

    $sql="SELECT * FROM `bus_info` WHERE Origin = '$start' and Destination = '$end' and Date = '$date'";
    $execute = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($execute);
    // print_r($rows);exit;
    echo '<div class = "box">';
    if($row==0){
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
        while ($row = mysqli_fetch_array($execute)) {
            $req = $row['seats'];
            $busId = $row['id'];
            $totalFare = $row['fare']*$req;
            echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['busname']."</td>";
echo "<td>".$row['seats']."</td>";
echo "<td>".$row['origin']."</td>";
echo "<td>".$row['destination']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['arrival_time']."</td>";
echo "<td>".$row['departure_time']."</td>";
echo "<td>".$row['fare']."</td>";
echo "<td>";

echo '<a href="index2.php?Seats_no='.$req.'& Bus_id='.$busId.'& Total_fare='.$totalFare.'">Book Now</a>';
echo "</td>";
echo "</tr>";
}
echo "</table>";
echo '</div>';
        
    }
}
?>
        </div>
   
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
