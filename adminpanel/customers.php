<?php
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
    <link rel="stylesheet" href="customers.css">
    <title>Customers</title>
  </head>
  <body>
    <section>
    <?php
    include 'C:\xampp\htdocs\cloudspring\task3_php_project\config.php';
    $sql = "SELECT id,fname,lname,email,username,password,security FROM users";
    $exe = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($exe);
    
     ?>
    
     <table class = "table center table-hover">
       <thead>
         <tr>
           <th scope = "col">Id</th>
           <th scope = "col">Firstname</th>
           <th scope = "col">Lastname</th>
           <th scope = "col">Email</th>
           <th scope = "col">Username</th>
           <th scope = "col">Password</th>
           <th scope = "col">Security</th>
           <th scope = "col">Operations</th>
    
         </tr>
       </thead>
       <?php
       while($row = mysqli_fetch_array($exe)){
    
       ?>
       <tbody>
         <tr>
           <th scope = "row"><?php echo $row['id'];?></th>
           <td><?php echo $row['fname'];?></td>
           <td><?php echo $row['lname'];?></td>
           <td><?php echo $row['email'];?></td>
           <td><?php echo $row['username'];?></td>
           <td><?php echo $row['password'];?></td>
           <td><?php echo $row['security'];?></td>

           <td><a id = "up" class = "text-light badge bg-primary text-light"   href="">Update</a>
              <a id = "del" class = "text-light badge bg-danger" href="">Delete</a></td>
         </tr>
       </tbody>
    <?php
    }
    ?>
     </table>
    </section>
    

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