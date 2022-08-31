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
    <link rel="stylesheet" href="loginstyle.css">
    <title> Admin Login</title>
  </head>
  <body>
    <?php

include 'C:\xampp\htdocs\cloudspring\task3_php_project\config.php';
if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $pword = $_POST['password'];
    $sql_query = "SELECT * FROM admin WHERE username = '$uname' and password = '$pword'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    // $row = mysqli_fetch_array($result);
    if ($count == 1) {
        $_SESSION["username"] = $uname;
        header("Location:dashboard.php");
        // echo json_encode(array("statusCode" => 200));
        
    } else {
        echo "Login failed";
        // echo json_encode(array("statusCode" => 201));
        
    }
}
?>
      <section class = "lgncontainer">
        <div class="div">
          <h2>Admin Login</h2>
          <a href="#" class = "lgnbtn">LOGIN</a>
        </div>
      </section>
      <div class="popup">
        <form id = "myForm" method = "POST" action = "login.php" class="popup-content">
          <img src="images\adminicon.png" id = "adminicon" alt="admin">
          <input type="text" name = "username" id = "username" placeholder = "Username">
          <input type="password" name = "password" id = "password" placeholder = "Password">
          <div class="error" id = "error"></div>
          <input class = "lgnbtn" id = "login" type = "submit" name = "submit" value = "Login">
          <!-- <a href="#" name = "login" id = "login" class = "lgnbtn">LOGIN</a> -->
          <img src="images\close.png" class = "close" alt="Admin">
        </form>
      </div>
    
      
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

      <script>
      $(document).ready(function(){

        $('.lgnbtn').click(function(){
          $('.popup').css("display", "flex");
        });
        $('.close').click(function(){
          $('.popup').css("display", "none");
        });
      });
        
        </script>
  
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
  </body>
</html>