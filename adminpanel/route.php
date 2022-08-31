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
    <link rel = 'stylesheet' href = "route.css">
    <title>Routes</title>
  </head>
  <body>
    <section>
    <?php
include 'C:\xampp\htdocs\cloudspring\task3_php_project\config.php';
$sql = "SELECT bus_id,origin,destination FROM bus_info";
$exe = mysqli_query($conn,$sql);
$row = mysqli_num_rows($exe);

 ?>

 <table class = "table w-50 table-striped">
   <thead>
     <tr>
       <th scope = "col">Id</th>
       <th scope = "col">Origin</th>
       <th scope = "col">Destination</th>
       <th scope = "col">Operations</th>

     </tr>
   </thead>
   <?php
   while($row = mysqli_fetch_array($exe)){

   ?>
   <tbody>
     <tr>
       <th scope = "row"><?php echo $row['bus_id'];?></th>
       <td><?php echo $row['origin'];?></td>
       <td><?php echo $row['destination'];?></td>
       <td><a id = "up" class = "text-light badge bg-primary text-light"   href="">Update</a>
          <a id = "del" class = "text-light badge bg-danger" href="">Delete</a></td>
     </tr>
   </tbody>
<?php
}
?>
 </table>

 <div class = "iframe">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4016631.6651292397!2d76.12831845000001!3d10.54063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0812ffd49cf55b%3A0x64bd90fbed387c99!2sKerala!5e0!3m2!1sen!2sin!4v1658296003528!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>
    </section>
 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>