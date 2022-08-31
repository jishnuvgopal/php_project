<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'navbar.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "book.css">
    <title>Booking Page</title>
  </head>
  <body>
  <?php
include 'config.php';
// echo "<h1>Welcome"." ".$_SESSION["username"]."</h1>";
// print_r($_SESSION);exit;

?>


<section class = "main">
<?php
echo "<h1 style = 'text-align:center;padding:8px;text-transform:uppercase;'>Hello" . " " . $_SESSION["username"] . "</h1>";
echo "<h1 id = 'welcome' style = 'text-align:center;'>Welcome to <span class = 'text-light'>travel</span><span class = 'text-success'>Pro</span></h1>";
if (isset($_SESSION['success'])) {
    echo '<p class="error-message"> <font size="6" color="green"> <center><i>';
    echo $_SESSION['success'];
    echo "</i> </center></font></p>";
    unset($_SESSION['success']);
}
if (isset($_SESSION['pay'])) {
    echo '<p class="message"> <font size="5" color="MediumVioletRedMagenta"> <center><i>';
    echo $_SESSION['pay'];
    echo "</i></center></font></p>";
    unset($_SESSION['pay']);
}
//  print_r($_SESSION);exit;

?>
<!-- <?php var_dump($_SESSION); ?> -->


  <div class="logoutbtn">
    <a href = "logout.php"><button  type="button" class="btn btn-success">Logout</button></a>
  </div>
    <div class="box p-4">
      
      <form class = "form" action = "bus_details.php" method = "POST">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="">
      <span>From</span>
      <input type="text" id = "" class="form-control" placeholder="Departure" name = "Origin">
    </div><br>
    <div class="">
    <span>To</span>
      <input type="text" class="form-control" placeholder="Destination" name = "Destination">
    </div><br>
    <div class="">
    <span>Date of Journey</span>
      <input type="date" class = "form-control" name = "Date">
    </div><br>
    <div class="">
    <span>Seats</span>
      <input type="text" class="form-control" placeholder="No. of seats" name = "Seats">
    </div><br>
    <div class="w-40 mx-5">
      <input type="submit" value = "SUBMIT" id = "submit" class = "form-control bg-primary">
    </div>
    </div>
  </div>
</form>
  
    </div>

</section>


    <!-- <a href = "logout.php">Logout</a> -->
    
          

    <!--  Popper and Bootstrap JS -->
<?php
include 'footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>