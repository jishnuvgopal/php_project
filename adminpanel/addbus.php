<?php
session_start();
include 'C:\xampp\htdocs\cloudspring\task3_php_project\config.php';
include 'nav.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Bus</title>
    <style>
        .main{
            background-color:lightgrey;
            width:100%;
            height:100vh;
            
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top:10px;
        }
        
        .bus-info{
            width:300px;
            font-family:'Times New Roman', Times, serif;
            background-color:navy;
            border-radius:5px;
            color:white;
            text-align:center;
            
        }
        .error{
          color:red;
        }
    </style>

  </head>
  <body>
        <?php

$busName = $origin = $destination = $seat = $arrival_time = $departureTime = $date = $fare = "";
$busNameErr = $originErr = $destinationErr = $seatErr = $arrival_TimeErr = $departure_TimeErr = $dateErr = $fareErr = "";
$valid = true;
if (isset($_POST['submit'])) {
    //Busname Validation
    if (empty($_POST["busname"])) {
        $busNameErr = "Busname is required";
        $valid = false;
        // echo '1'; exit;
        
    } else {
        $busName = $_POST["busname"];
        // check if username only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $busName)) {
            $busNameErr = "Only alphabets and white space are allowed";
            $valid = false;
            // echo '2'; exit;
            
        }
    }
    //Origin Validation
    if (empty($_POST["origin"])) {
        $originErr = "Origin place is required";
        $valid = false;
        // echo '3'; exit;
        
    } else {
        $origin = $_POST["origin"];
        // check if username only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z]*$/", $origin)) {
            $originErr = "Only alphabets are allowed";
            $valid = false;
            // echo '4'; exit;
            
        }
    }
    //Destination validation
    if (empty($_POST["destination"])) {
        $destinationErr = "Destination place is required";
        $valid = false;
        // echo '3'; exit;
        
    } else {
        $destination = $_POST["destination"];
        // check if destination only contains alphabets
        if (!preg_match("/^[a-zA-Z]*$/", $destination)) {
            $destinationErr = "Only alphabets are allowed";
            $valid = false;
            // echo '4'; exit;
            
        }
    }
    //Seat Validation
    if (empty($_POST["seats"])) {
        $seatErr = "This fied is required";
        $valid = false;
    }
    // if(strlen($seat) != 10) {
    // $seatErr = "Should be a valid seat number";
    // $valid = false;
    // // echo '12'; exit;
    // }
    //Time Validation
    if (empty($_POST["departure_time"])) {
        $departure_TimeErr = "This fied is required";
        $valid = false;
        // echo '5'; exit;
        
    }
    //Time Validation
    if (empty($_POST["arrival_time"])) {
        $arrival_TimeErr = "This fied is required";
        $valid = false;
        // echo '5'; exit;
        
    }
    //Date Validation
    if (empty($_POST["date"])) {
        $dateErr = "Date is required";
        $valid = false;
        // echo '5'; exit;
        
    }
    //Fare Validation
    if (empty($_POST["fare"])) {
        $fareErr = "This field is required";
        $valid = false;
        // echo '5'; exit;
        
    }
    if ($valid == true) {
        $busName = $_POST['busname'];
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $seats = $_POST['seats'];
        $departureTime = $_POST['departure_time'];
        $arrivalTime = $_POST['arrival_time'];
        $date = $_POST['date'];
        $fare = $_POST['fare'];
        // var_dump($_POST);exit;
        $sql = "INSERT INTO bus_info (busname,origin,destination,seats,departure_time,
                 arrival_time,date,fare)VALUES('$busName','$origin','$destination','$seats','$departureTime',
                '$arrivalTime','$date','$fare')";
        $result = mysqli_query($conn, $sql);
        // print_r($sql);exit;
        if ($result) {
            // echo 'Data inserted successfully';
            header("location: bus.php");
            // echo json_encode(array("statusCode" => 200));
            
        } else {
            echo 'Data insertion failed';
            // echo json_encode(array("statusCode" => 201));
            
        }
        mysqli_close($conn);
    }
}
?>

      <section class = "main">
      <form id = "myform" method = "POST" action = "" class = "">
          
<div class="bus-info mb-3"><h3>Add Bus Details</h3></div>
<div class="message" id = "success"></div>
    <div class="row">
      <div class="mb-3 col">
    <label  class="form-label">Bus Name</label>
    <input type="text" class="form-control" name = "busname" id="busname" >
    <span class="error">* <?php echo $busNameErr; ?> </span>  

  </div>
  <div class="mb-3 col">
    <label  class="form-label">Origin</label>
    <input type="text" class="form-control" name = "origin" id="busorigin">
    <span class="error">* <?php echo $originErr; ?> </span>  

  </div>
    </div>

  <div class="row">
  <div class="mb-3 col">
    <label  class="form-label">Destination</label>
    <input type="text" class="form-control" name = "destination" id="busdestination">
    <span class="error">* <?php echo $destinationErr; ?> </span>  

  </div>
  <div class="mb-3 col">
    <label  class="form-label">Seat</label>
    <input type="number" class="form-control" name = "seats" id="busseat">
    <span class="error">* <?php echo $seatErr; ?> </span>  

  </div>
  </div>
  <div class="row">
  <div class="mb-3 col">
    <label  class="form-label">Departure Time</label>
    <input type="time" class="form-control" name = "departure_time" id="busdeparturetime">
    <span class="error">* <?php echo $departure_TimeErr; ?> </span>  
  </div>

  <div class="mb-3 col">
    <label  class="form-label">Arrival Time</label>
    <input type="time" class="form-control" name = "arrival_time" id="busarrivaltime">
    <span class="error">* <?php echo $arrival_TimeErr; ?> </span>  
  </div>
  </div>
  
  <div class="row">
  <div class="mb-3 col">
    <label  class="form-label">Date</label>
    <input type="date" class="form-control" name = "date" id="busdate">
    <span class="error">* <?php echo $dateErr; ?> </span>  

  </div>
  <div class="mb-3 col">
    <label  class="form-label">Fare</label>
    <input type="number" class="form-control" name = "fare" id="busfare">
    <span class="error">* <?php echo $fareErr; ?> </span>  

  </div>
  </div>
 
  <button id = "submit" type="submit" name = "submit" class="btn btn-primary">Submit</button>
</form>
      </section>
  
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>