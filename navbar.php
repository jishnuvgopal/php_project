<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "navbar.css">
   
    <title>Document</title>
    <style>
      #logotext{
        font-size:50px;
        font-weight:300px;
      }
      </style>
</head>
<body>
         <!-- navigation bar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-dark " style = "position:fixed;width:100%;top:0;" height = "30px">
  <div class="container">
    <a class="navbar-brand my-2" href="#"><img class = "rounded " id = "logo" src = "img/icon2.png" height = "50px" width = "70px"></a>
    
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <span class = "text-white" id= "logotext" style = "font-size:40px; font-weight:800px;"
      >tavel<span class = "text-success">Pro</span></span>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index2.php">BOOK HERE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">HELP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="adminpanel/login.php">ADMIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>