<?php
  include 'C:\xampp\htdocs\cloudspring\task3_php_project\config.php';
  include "nav.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href = "bookings.css">
    <title>Bookings</title>
  </head>
  <body>
      <section class = "main">

    <?php
$sql = "SELECT * FROM booking";
$exe = mysqli_query($conn,$sql);
$row = mysqli_num_rows($exe);

// print_r($exe);exit;
    ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Bus Id</th>
      <th scope="col">Seats</th>
      <th scope="col">Total Fare</th>
      <th scope="col">Bank</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <?php
  while($row = mysqli_fetch_array($exe)){
      $bookingId = $row['booking_id'];
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $bookingId ;?></th>
      <td><?php echo $row['username'] ;?></td>
      <td><?php echo $row['email'] ;?></td>
      <td><?php echo $row['phone'] ;?></td>
      <td><?php echo $row['bus_id'] ;?></td>
      <td><?php echo $row['seats_no'] ;?></td>
      <td><?php echo $row['total_fare'] ;?></td>
      <td><?php echo $row['bank'] ;?></td>
      <td><?php echo $row['payment_method'] ;?></td>
      <td><a id = "up" class = "text-light badge bg-primary text-light"
             data-bs-toggle="modal" data-bs-target="#updateModal"  href="">Update</a>
          <a id = "del" class = "text-light badge bg-danger" href="">Delete</a></td>
    </tr>
  </tbody>
<?php
}
?>
</table>
</section>

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="ms-auto" id="exampleModal">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form>
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" id="userName">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Bus Id</label>
    <input type="number" class="form-control" id="busid">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Seats</label>
    <input type="number" class="form-control" id="seats">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Total Fare</label>
    <input type="number" class="form-control" id="totalFare">
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Submit</button>
  </div>
</form>
      </div> 
    </div>
  </div>
</div>

<?php
  
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>