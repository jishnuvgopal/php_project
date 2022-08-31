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
    <title>Bus Details</title>
    <style>
      .main{
        background-color: #D9AFD9;
        background-image: linear-gradient(62deg, #D9AFD9 0%, #97D9E1 100%);
        height:100vh;
        padding:5px;
      }
      .addbus{
       text-align:center;
       background-color: navy;
       width:100px;
       height:35px;
       opacity:.8;
       border-radius:5px;
       position:relative;
       margin-left:auto;
       margin-right:auto;
       margin-bottom:4px;
       padding:4px;
      }
      .addbus .abus{
        text-decoration:none;
        font-style:bolder;
        cursor:pointer;
        font-family:'Times New Roman', Times, serif;
        text-transform:uppercase;
        font-weight:700px;
      }
      .abus:hover{
        color:white;
      }
        .up{
        height:27px;
        text-decoration:none;
        
      }
        .del{
        height:27px;
        text-decoration:none;
      }
      table{
        border: 1px solid black;
      }
      thead{
        background-color: #7298c9;
      }
      .table td{
        border: 1px solid black;
      }
      .table th{
        border: 1px solid black;
      }
      .table{
        border-collapse: collapse;
        width: 80%;
        
      }
      table{
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>
  <body>
    <?php
include 'nav.php';
?>
    <section class = "main">
      <div class = "addbus"><a class="abus" href = "addbus.php">Add Bus</a></div>
        <?php
include 'C:\xampp\htdocs\cloudspring\task3_php_project\config.php';
// print_r($_POST);exit;
$sel = "SELECT * FROM bus_info";
// print_r($sel);exit;
$exe = mysqli_query($conn, $sel);
$rows = mysqli_num_rows($exe);
$number=1;
echo '<table align ="center" class = "table table-hover" >
            <tr>
            <th scope = "col">Id</th>
            <th>Name of the bus</th>
            <th>Available seats</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Date of travelling</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
            <th>Fare</th>
            <th>Operations</th>
            </tr>';
while ($rows = mysqli_fetch_array($exe)) {
    $busId = $rows['bus_id'];
    
    echo "<tr id = 'table'>";
    echo "<td>" .$number. "</td>";
    echo "<td>" .$rows['busname']. "</td>";
    echo "<td>" .$rows['seats']. "</td>";
    echo "<td>" .$rows['origin']. "</td>";
    echo "<td>" .$rows['destination']. "</td>";
    echo "<td>" .$rows['date']. "</td>";
    echo "<td>" .$rows['departure_time']. "</td>";
    echo "<td>" .$rows['arrival_time']. "</td>";
    echo "<td>" .$rows['fare']. "</td>";
    echo "<td>";
    echo '<button class = "badge bg-primary text-light"><a class = "up text-light"   href="update.php?
  updateid=' . $busId . '">Update</a></button>
  <button class = "badge bg-danger" onclick="deleteUser('.$busId.')"><a class = "del text-light"   href="delete.php?
  deleteid=' . $busId . '" >Delete</a></button>';
    echo "</td>";
    echo "</tr>";
    $number++;
}
echo "</table>";
?>
    </section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function deleteUser(deleteid){
            $.ajax({
                url:"delete.php",
                type:"POST",
                data:{
                    deletesend:deleteid
                }
                success:function(data,status){
                    $().redirect('bus.php');
                }
            });
        }
        </script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>