<?php
session_start();
include 'navbar.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "home.css">
    <link rel = "stylesheet" href = "register.css">
    <title>Book Here</title>
  </head>
  <body>
        

<?php
include 'config.php';
$fName = $lName = $email = $uName = $password = $security = "";
$fnameErr = $lnameErr = $emailErr = $unameErr = $passwordErr = $securityErr = "";
$valid = true;
if (isset($_POST['submit'])) {
    // Firstname validation
    if (empty($_POST['firstname'])) {
        $fnameErr = "First name is required";
        $valid = false;
    } else {
        $fName = $_POST['firstname'];
        if (!preg_match("/^[a-z A-Z]*$/", $fName)) {
            $fnameErr = "Only alphabets and white space are allowed";
            $valid = false;
        }
    }
    // Lastname validation
    if (empty($_POST['lastname'])) {
        $lnameErr = "Last name is required";
        $valid = false;
    } else {
        $lName = $_POST['lastname'];
        if (!preg_match("/^[a-z A-Z]*$/", $lName)) {
            $lnameErr = "Only alphabets and white space allowed";
            $valid = false;
        }
    }
    // Email validation
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
        $valid = false;
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $valid = false;
        }
    }
    // Username validation
    if (empty($_POST["username"])) {
        $unameErr = "Username is required";
        $valid = false;
    } else {
        $uName = $_POST["username"];
        if (!preg_match("/^[a-zA-Z]*$/", $uName)) {
            $unameErr = "Only alphabets and white space allowed";
            $valid = false;
        }
    }
    // Password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $valid = false;
    } else {
        $password = $_POST["password"];
        if (!preg_match("/^[a-zA-Z0-9]*$/", $password)) {
            $passwordErr = "Only alphabets and numbers allowed";
            $valid = false;
        }
    }
    // Security validation
    if (empty($_POST['security'])) {
        $securityErr = "Security field is required";
        $valid = false;
    }
    if ($valid == true) {
        $fName = $_POST['firstname'];
        $lName = $_POST['lastname'];
        $email = $_POST['email'];
        $uName = $_POST["username"];
        $password = $_POST["password"];
        $security = $_POST['security'];
        // Insertion and Execution
        $sql = "insert into users(fname,lname,email,username,password,security) values('$fName','$lName','$email','$uName','$password','$security')";
        $exec = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($exec) {
            header("Location:index2.php");
        } else {
            echo "Registration Failed";
        }
    }
}
?>

<section class="main">
  <div class="regbox">
  <form action="register.php" method ="POST" class="form-4" >
    <div class="row">
      <div class="col-md-6">
      <h1>Register</h1>
	<span>First name</span>
<input class="form-control" name="firstname" placeholder="Enter your first name" type="text">
<span  class ="error">*<?php echo $fnameErr; ?></span>
<br>
<span>Last name</span>
<input class="form-control" name="lastname" placeholder="Enter your last name" type="text">
<span  class ="error">*<?php echo $lnameErr; ?></span>
<br>
<span>Email</span>
<input class="form-control" name="email" placeholder="Enter your mail id" type="text">
<span  class ="error">*<?php echo $emailErr; ?></span>
<br>
<span>Username</span>	
<input class="form-control" name="username" placeholder="Choose a username" type="text">
<span  class ="error">*<?php echo $unameErr; ?></span>
<br>
<span>Password</span>    
<input class="form-control" name="password" placeholder="Choose a password" type ="password">
<span  class ="error">*<?php echo $passwordErr; ?></span>
<br>
<span>Name of your city?</span>  
<input class="form-control" name="security" placeholder="Please answer the security question" type ="text">
<span  class ="error">*<?php echo $securityErr; ?></span>
<br>
<div class="row">
<input type="submit" class="btn btn-primary" name="submit" value="Register">
</div>
      </div>
    </div>
				 
</form>
  </div>	
</section>

    
 <!-- Footer -->
<?php
include 'footer.php';
?>
  

    <!--  Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
  </body>
</html>