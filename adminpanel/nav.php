<?php

include 'C:\xampp\htdocs\cloudspring\task3_php_project\config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "dashstyle.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navtext" href="dashboard.php">Admin Panel</a>
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="navtext"  href="logout.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="navtext" href="bus.php">Buses</a>
        </li>
        <li class="nav-item">
          <a class="navtext" href="route.php">Routes</a>
        </li>
        <li class="nav-item">
          <a class="navtext" href="customers.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="navtext" href="bookings.php">Bookings</a>
        </li>
        <li class="nav-item">
          <a class="navtext" href="#">Seats</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>

