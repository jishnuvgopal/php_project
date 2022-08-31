<?php
$conn = mysqli_connect("localhost","root","","bus_reservation_system");
echo "";
if(!$conn){
die("<script>alert('connection failed')</script>");
}