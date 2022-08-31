<?php
include 'nav.php';
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
    <link rel = "stylesheet" href = "dashstyle.css">
    <title>Dashboard</title>
  </head>
  <body>
    <section class="img">
<img class='bg' src="images/admin-panel.jpg" alt="">
   
  <?php

include 'C:\xampp\htdocs\cloudspring\Task 3\config.php';
?>
  <section class = "contain">
      <div class="row">
        <div class="col-md-12">
            <h1 class = "heading"></h1>
        </div>
        <a id = "logout" href = "logout.php">Logout</a>
      </div>
  </section>
  
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>

<script type="text/javascript">
        $(function(){
            $(".heading").typed({
                strings: ["Welcome to Admin Page!"],
                typeSpeed: 100,
            });
            $(".heading").css({"color":"navy",
                              "font-style":"Cambria, Cochin, Georgia, Times, 'Times New Roman', serif",
                            "text-shadow":"2px 2px",
                               "letter-spacing":"5px",
                                "font-weight":"500p"});

        });
    </script>

    
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>
