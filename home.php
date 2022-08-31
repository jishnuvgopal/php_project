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
   
    <link rel = "stylesheet" href = "home.css">
    <link rel = "stylesheet" href = "homejs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>travelPro</title>
  </head>
  <body>
 
<!-- cover page section -->

<section id = "covermain" class=" text-light">


  <div class="containercover">
      <div class = "col-lg-12 col-md-12 col-xs-12">
        <div class = "textbook">
          <h2><span class = "text-success">Search</span> Your Bus Here</h2>
        </div>
        <form action = "search_bus.php" method = "POST">
        <div class = "searchbus">
          <span><input placeholder = "Start" type = "text" name = "Origin" Required></span>
          <span><input placeholder = "End" type = "text" name = "Destination" Required></span>
          <input id="" type="date" name = "Date" Required>
          <button type = "submit" id =  "searchbtn" name = "Submit">Search Buses</button>
        </div>
        </form>
  </div>
</div>
</section>
<!-- discount section -->
<section class="groupoff" id = "groupid">
  <div class="row">
      <div class="first">
        <span id = "firstoff"></span>
      </div>
        <div class="second">
        <span>SAVE UPTO RS 300* ON YOUR BUS TICKETS.</span>
        </div>
      <div class="third">
        <span>Book Your Favourite Seats Now</span>
      </div>
  </div>
</section>
<!-- discount section -->
<section class = "offer">
<div class="row p-5">
  <div class="col-lg-3">
    <div class="card bg-light" style="width: 18rem;text-align:center;">
  <div id = "card" class="card-body">
    <h5 class="card-title">Save Upto Rs500 on First Trip</h5>
    <h6 class="card-subtitle mb-2 text-muted">FIRST500</h6>
    <p class="card-text">Use the Above code</p>
    <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
  </div>
    </div>
  </div>
  
  <div class="col-lg-3">
    <div class="card bg-light" style="width: 18rem;text-align:center;">
  <div id = "card" class="card-body">
    <h5 class="card-title">Save Upto Rs100 on Bus Tickets</h5>
    <h6 class="card-subtitle mb-2 text-muted">TRAVPRO100</h6>
    <p class="card-text">Use the Above code</p>
    <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
  </div>
    </div>
  </div>

  <div class="col-lg-3">
    <div class="card bg-light" style="width: 18rem;text-align:center;">
  <div id = "card" class="card-body">
    <h5 class="card-title">Save Upto Rs250 at any Travel</h5>
    <h6 class="card-subtitle mb-2 text-muted">TRIP250</h6>
    <p class="card-text">Use the Above code</p>
    <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
  </div>
    </div>
  </div>

  <div class="col-lg-3">
    <div class="card bg-light" style="width: 18rem;text-align:center;">
  <div id = "card" class="card-body">
    <h5 class="card-title">Save Upto Rs500 on First Trip</h5>
    <h6 class="card-subtitle mb-2 text-muted">FIRST500</h6>
    <p class="card-text">Use the Above code</p>
    <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
  </div>
    </div>
  </div>
</div>

</section>

<!-- bus section -->
<section class="busimgs p-1">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bus1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bus2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bus4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<!-- covid safety section -->
<section>
  <div class="container bg-light">
    <div class="shield">
      <div class="row" >
      <div class = "shieldlogo col-lg-2"><i class="fa-solid fa-shield-virus"></i></div>
      
      <div class="col-lg-10">
      <div class = "shieldintro">Introducing Safety+</div>
      <div class = "shieldsub">Opt to Travel Safe with TravelPro</div>
      <div>
        <span><i class="fa-solid fa-bus"></i>Look for buses with <i class="fa-solid fa-shield-virus"></i> </i><b>Safety</b>
      tag while booking your journey</span>
      </div>
      </div>
      
      
    <div class="row p-3">
      <div class="col-lg-4  text-centered">
      <div><h3>Sanitized Bus</h3></div>
      <div class="">All Safety+ buses are sanitized and disinfected before and after every trip. </div>
      </div>
      <div class="col-lg-4">
      <div><h3>Mandatory Mask</h3></div>
      <div class="">Proper masks are mandatory for all passengers and bus staff.</div>
      </div>
      <div class="col-lg-4">
        <div class=""><h3>Thermal Screening</h3></div>
        <div class="">All passengers will undergo thermal screening.
           Temperature checks for bus drivers and service staff are done before every trip.</div>
      </div>
    </div>
      
    </div>
  </div>
</section>

<!-- Banner -->

 <!-- One -->
<a name="about"></a>
			<section id="one" class="wrapper style1 align-center">
				<div class="container ">
          <div class="row">
          <header class = "col-lg-12 text-center">
						<h2>travelPro</h2>
						<p> <b>travelPro is a online bus reservation system. 
              <br>You can now choose your bus and your seat easily,
               have the tickets delivered to your mail and online payments.
                <br>Try BookMyBusTicket experience today.</b></p>
					</header>
          </div>
					
					<div class="row">
						<section class="col-lg-4">
            <i style = "font-size:100px;padding-bottom:7px;" class="fa-solid fa-clock"></i>
							<p>You can book the tickets before one month<br> You can cancel the tickets one day before the journey with 100% refund</p>
						</section>
						<section class="col-lg-4">
            <i style = "font-size:100px;padding-bottom:7px;" class="fa-solid fa-comments"></i>
							<p>You can comment/mail your queries to our contacts</p>
						</section>
						<section class="col-lg-4">
            <i style = "font-size:100px;padding-bottom:7px;" class="fa-solid fa-user"></i>
							<p>You can create your personal account and can see your booking history</p>
						</section>
					</div>
				</div>
			</section>

      <!-- Two -->
			<section id="two" class="wrapper style2 align-center">
				<div class="container">
          <div class="row col-lg-12 text-center">
          <header>
						<h2>travelPro</h2>
						<p>Book, Travel, Enjoy & Make Memories <br> "Pay Less Live Large"</p>
					</header>
          </div>
				
					<div class="row">
						<section class="col-lg-6">
							<img class="" style = "height:300px;width:500px;" src="img/pic3.jpg" alt="" />
					<!--		<h3 class="title">Lorem ipsum dolor</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsa voluptate, quae quibusdam. Doloremque similique, reiciendis sit quibusdam aperiam? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					-->	</section>
						<section class="col-lg-6">
							<img class="" style = "height:300px;width:500px;" src="img/pic2.jpg" alt="" />
					<!--		<h3 class="title">Esse, fugiat, in</h3>
							<p>Natus perspiciatis fugit illum porro iusto fuga nam voluptas minima voluptates deserunt, veniam reiciendis harum repellat necessitatibus. Animi, adipisci qui. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					-->	</section>
          <div class="row col-lg-12 text-center p-4">
            <p><b> Why travelPro for Bus Booking? </b>
              <br>The leading player in online Bus bookings in the country, We offer lowest fares, exclusive discounts and a seamless online booking experience. Desktop or mobile site is a delightfully customer friendly experience, and with just a few clicks you can complete your booking.</p>
              <br> <br>
              <p><b>Booking Bus Ticket with travelPro</b> <br>
              With more than 1000 bus routes spread across the country and integration with over 1300 bus operators, MakeMyTrip's online bus reservation system is simpler and smarter. It provides you a wide range of facilities, right from choosing your pickup point to your preferred choice of seat (for instance, luxury buses with sleeper berths). You can also choose from the widest range of available buses like Mercedes, Volvo, Volvo AC, AC luxury, Deluxe, Sleeper, Express and other private buses. The payment options are easier too- you can use either debit/credit card facility or net-banking. Not just that, in case of any change in your travel plan, bus tickets can be cancelled online. So, next time you need not stand in long queues or search at different bus ticket counters. You can directly book bus tickets online with BookMyBusTicket.com and stay assured.</p>
          </div>	
				</div>
					<footer class = "content text-center">
						<div class="">
            <h4><a href="#" class="button alt big">Learn More</a></h4>
            </div>
							
						<p> <b> SAVE BIG ONE BUS TICKETS!! GET UPTO RS.300 INSTANT DISCOUNT. <BR> COUPON CODE : DISBOOKBUS </b></p>
					</footer>
				</div>
			</section>

<!-- Footer -->
<?php
include 'footer.php';
?>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>

<script type="text/javascript">
        $(function(){
            $("#firstoff").typed({
                strings: ["FIRST"],
                typeSpeed: 300,
                loop:true

            });
        });
    </script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
  </body>
</html>