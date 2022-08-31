<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Bus</title>
  </head>
  <body>
    <?php
include 'nav.php';
include 'C:\xampp\htdocs\cloudspring\task3_php_project\config.php';
$busName = $origin = $destination = $seats = $arrival_time = $departureTime = $date = $fare = "";
$busId = $_GET['updateid'];
$sql = "SELECT * FROM bus_info WHERE bus_id='$busId'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$busName = $row['busname'];
$origin = $row['origin'];
$destination = $row['destination'];
$seats = $row['seats'];
$arrivalTime = $row['arrival_time'];
$departureTime = $row['departure_time'];
$date = $row['date'];
$fare = $row['fare'];
if (isset($_POST['submit'])) {
    // $busid = $_POST['id'];
    $busName = $_POST['busname'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $seats = $_POST['seats'];
    $arrivalTime = $_POST['arrival_time'];
    $departureTime = $_POST['departure_time'];
    $date = $_POST['date'];
    $fare = $_POST['fare'];
    // print_r($_POST);exit;
    $sql = "UPDATE bus_info SET bus_id = '$busId',busname='$busName',origin='$origin',destination='$destination',
            seats='$seats',arrival_time='$arrivalTime',departure_time='$departureTime',date='$date',
            fare='$fare' WHERE bus_id='$busId'";
    $result = mysqli_query($conn, $sql);
    // $count = mysqli_fetch_array($result);
    // print_r($sql);exit;
    if ($result) {
      header('location:bus.php');
        // echo "Data updated successfully";
    } else {
        echo "Data updation failed";
    }
    mysqli_close($conn);
}
?>

 <section class = "container-fluid">
      <form id = "myform" method = "POST" action = "" class = "">
          
<div class="bus-info mb-3"><h3>Add Bus Details</h3></div>
<div class="message" id = "success"></div>
    <div class="row">
      <div class="mb-3 col">
    <label  class="form-label">Bus Name</label>
    <input type="text" class="form-control" name = "busname" id="busname" value = "<?php echo $busName; ?>" required>
  </div>
  <div class="mb-3 col">
    <label  class="form-label">Origin</label>
    <input type="text" class="form-control" name = "origin" id="busorigin" value = "<?php echo $origin; ?>" required>
  </div>
    </div>

  <div class="row">
  <div class="mb-3 col">
    <label  class="form-label">Destination</label>
    <input type="text" class="form-control" name = "destination" id="busdestination" value = "<?php echo $destination; ?>" required>
  </div>
  <div class="mb-3 col">
    <label  class="form-label">Seat</label>
    <input type="number" class="form-control" name = "seats" id="busseat" value = "<?php echo $seats; ?>" required>
  </div>
  </div>
  
  <div class="row">
  <div class="mb-3 col">
    <label  class="form-label">Arrival Time</label>
    <input type="time" class="form-control" name = "arrival_time" id="busarrivaltime" value = "<?php echo $arrivalTime; ?>" required>
  </div>
  <div class="mb-3 col">
    <label  class="form-label">Departure Time</label>
    <input type="time" class="form-control" name = "departure_time" id="busdeparturetime" value = "<?php echo $departureTime; ?>" required>
  </div>
  </div>
  
  <div class="row">
  <div class="mb-3 col">
    <label  class="form-label">Date</label>
    <input type="date" class="form-control" name = "date" id="busdate" value = "<?php echo $date; ?>" required>
  </div>
  <div class="mb-3 col">
    <label  class="form-label">Fare</label>
    <input type="number" class="form-control" name = "fare" id="busfare" value = "<?php echo $fare; ?>" required>
  </div>
  </div>
 
  <button id = "submit" type="submit" name = "submit" class="btn btn-primary" 
   data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button>
</form>
      </section>
        
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Success</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-success" role="alert">
  Payment Successfull!
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- jQuery -->
   <script>
     
   </script>
   
   
   
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
