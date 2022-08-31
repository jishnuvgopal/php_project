<?php
session_start();
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "index2.css">
    <link rel = "stylesheet" href = "home.css">
    <style>
        /* #submit::before{
            content:"Invalid"
            
        } */
        </style>
</head>
<body>
  

<?php
include 'config.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        // $firstname = $_POST['firstname'];
        // $lastname = $_POST['lastname'];
        // print_r($_POST); exit;
        $sql = "SELECT * FROM users WHERE username = '$user' and password = '$pass'";
        $exec = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($exec);
        // print_r($sql);exit;
        if ($count != 0) {
            $_SESSION["username"] = $user;
            $_SESSION['success'] = 'Login successfull';
            header("Location:book.php");
        } else {
            // $_SESSION['error'] = 'Invalid username or password';
            echo "<h3 class = 'loginerror'>Invalid username or password</h3>";
            
        }
    }
}
?>
<section class="main">
    <div class="loginbox">

    <form class="" action="" method ="POST" >
            <div class="row">
                <div class="col-md-6">
                <h1>Login</h1>
				    
                    <span>Username</span>
                    <input type="text" class="form-control" name="username" placeholder="Enter your first name" >
                
                    <span>Password</span>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" >
                
                    <div class="btn">
                        <input id = "submit" type="submit" class="btn btn-primary" name="submit" value="Continue">
                    </div>
                    
                
                        <!--  <a href="forgetpass.php" > Forgot password?</a> -->
                    &nbsp;
                    <a href="register.php" > Register Now</a>
                </div>
                   
        </div>
                </form>

    </div>
				​
</section>

			
	<!-- Footer -->
<?php
include 'footer.php';
?>

 <!-- Option 2: Separate Popper and Bootstrap JS -->
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>            
</body>
</html>