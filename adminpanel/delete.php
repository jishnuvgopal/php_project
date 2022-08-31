<?php
session_start();
include 'C:\xampp\htdocs\cloudspring\Task 3\config.php';
if (isset($_GET['deleteid'])) {
    $busId = $_GET['deleteid'];
    $sql = "DELETE FROM bus_info WHERE bus_id=$busId";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Record deleted successfully.";
        header('location:bus.php');
        // echo json_encode(array("statusCode"=>200));
    } else {
        // echo "Error:" . $sql . "<br>" . $conn->error;
        // echo json_encode(array("statusCode"=>201));
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
       
    </script>
</body>
</html>
