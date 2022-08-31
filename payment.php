<?php
session_start();
include 'navbar.php';
include 'config.php';
    $_SESSION['Total_fare']=$_GET['Total_fare'];
		$_SESSION['Bus_id']=$_GET['Bus_id'];
		$_SESSION['Seats_no']=$_GET['Seats_no'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "payment.css">
    <title>Payment Page</title>
  </head>
  <body>

  <div class="logoutbtn">
    <a href = "logout.php"><button type="button" class="btn btn-success">Logout</button></a>
  </div>

  <section class = "main">
      <div class="payment-box">
  <div class="row">
      <div class="col-md-6">
      <left> <h2>Payment</h2> </left>

<form autocomplete = "off" action="payment_success.php" method="POST">
  <label for=""> Select a bank</label>
    
<select name="bank" class="form-control" required>
    <option value="">Select Bank</option>
  	<option value="BOB">Bank of Baroda</option>
  	<option value="SBI">State Bank of India</option>
  	<option value="FED">Federal Bank</option> </select>
  	<br>
 <label for="">Choose a payment method</label> 
   
<select name="payment_method" class="form-control" required>
    <option value="">Payment Method</option>
  	<!-- <option value="Net Banking">Net Banking</option> -->
  	<option value="Debit card">Debit card</option> </select>
  	<br>
    <label for="">Phone Number</label> 
   <input type="number" class = "form-control" name = "phone" placeholder="9654287586" required>
   <br>
   <label for="">Email</label> 
   <input type="email" class = "form-control" name = "email" placeholder="John@gmail.com" required>
   <br>
   <h3> <i>Total Fare: <?php echo $_GET['Total_fare'];
print_r($_SESSION); ?></i></h3>
      </div>
 <div class="col-md-6">

 <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
              <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
              <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
              <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
            </div>
         

   <label for="">Name of Cardholder</label> 
   <input type="text" class = "form-control" placeholder="John Honay" required>
    <br>
   <label for="ccnum">Debit card number</label>
    <input type="text" class = "form-control" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
    <br>
   <label for="expmonth">Exp Month</label>
    <input type="text" class = "form-control" id="expmonth" name="expmonth" placeholder="September" required>
    <br>
      <div class="row">
        <div class="col-50">
          <label for="expyear">Exp Year</label>
          <input type="text" class = "form-control" id="expyear" name="expyear" placeholder="2018" required>
          <br>
          <label for="cvv">CVV</label>
          <input type="text" class = "form-control" id="cvv" name="cvv" placeholder="352" required>
          <br>
        </div>
        </div>
      </div>
  <br>
  <input class="btn btn-primary" name = "submit" id = "button" type="submit" value="Click here to pay"
   data-bs-toggle="modal" data-bs-target="#exampleModal" >
 </div>
  </div>
  
  </form>
      </div>
  

     
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Success</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert alert-success" role="alert">
  Payment Successfull!
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
  </section>
  
			

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <?php
include 'footer.php';
?>
  </body>
</html>