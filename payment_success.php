<?php 
session_start();
// print_r($_SESSION);exit;

 include 'config.php';
//  echo $_SESSION['username'];
      
        $userName = $_SESSION['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $busId = $_SESSION['Bus_id'];
        $seats = $_SESSION['Seats_no'];
        $totalFare = $_SESSION['Total_fare'];
        $bank = $_POST['bank'];
        $paymentMethod = $_POST['payment_method'];
        
        // print_r($_POST);exit;
        $ins="INSERT INTO booking (username,email,phone,bus_id,seats_no,total_fare,bank,payment_method)
            VALUES('$userName','$email','$phone','$busId','$seats','$totalFare','$bank','$paymentMethod')";
        $req=$_SESSION['Seats_no'];
        // $id = $_SESSION['busid'];
        
        $upd= "UPDATE bus_info SET seats=(seats-$req) WHERE bus_id='$busId'";
        
        // insert into booking
        // train seats decrease
        
        mysqli_query($conn,$ins) or die(mysql_error());
        mysqli_query($conn,$upd) or die(mysql_error());

        $_SESSION['pay'] = "Payment successfull";
        header('location:book.php');
       
        unset($_SESSION['Bus_id']);
        unset($_SESSION['Seats_no']);
        unset($_SESSION['Total_fare']);
      ?>