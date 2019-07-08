<!DOCTYPE html>
<html>
<head>
	<title>Ayenics</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="../assets/css/styles.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>

	<div class="wrapper cart-wrapper">

		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="navbar">
			<div class="container">
				<a href="#" class="navbar-brand">Ayenics Arts n Crafts</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav">

					</div>
					<div class="navbar-nav ml-auto">         
						<a href="{{ url('/')}}" class="nav-item nav-link">Home</a>
						<a href="#events" class="nav-item nav-link">Events</a>
						<a href="#" class="nav-item nav-link">Contact</a>
						<a href="#" class="nav-item nav-link">Cart <span>0</span></a>
						<a href="{{url ('/home')}}" class="nav-item nav-link">Login</a>
					</div>
				</div>
			</div>

		</nav>
		
		<div class="cart-landingSpace"></div>

		<!-- landing-row -->
		<div class= "landing col-sm-12 col-md-12 col-lg-12 py-2 mb-5" style="margin-top:-870px;">

			<div class="division row">
				
				<div class="col-sm-12 col-md-12 col-lg-12">

					<div class="row landing-row" >

						<div class="landing-col col-sm-12 col-md-4 col-lg-4 mt-5">
								<div class="row-landing-photo">
									<div class="col-landing-photo col-sm-12 col-md-12 col-lg-12">
										<img src="../assets/images/barrel2.jpg">
										
									</div>
								</div>

							</div>

						<div class="landing-col col-sm-12 col-md-5 col-lg-5 mt-5">
							<h4 class="py-2 mb-0">Faux Barrel</h4>
							<small>by Ayenics Arts n Crafts</small> 
							<br>
							
							<small>This item is not available to ship outside of the Philippines.</small><br>
							

							<p class="mt-5">Product Details</p>
								<ul>
									<li><small>Color: Black (Hoops)</small></li>
									<li><small>Measurements:</small></li>
										<ul>
											<li><small>29" height</small></li>
											<li><small>18-21-18 diameter</small></li>
										</ul>
									<li><small>Handcrafted Varnished Wood</small></li>
									<li><small>Unfinished - No varnish upon request | Send us a message after your purchase
									</small></li>
									<li><small>Personalized - We also customize size and design of barrel</small></li>
									<li><small>Perfect for event styling, table for cakes, bar and restaurant, photo shoot.</small></li>
								</ul>

							<div class="cart-quantity mt-5">
								<p>Quantity
								 <button class="minus mx-2" type="button" name="button"><i class="fas fa-minus"> </i></button>
								 <span class="quantity"> 1 </span>
								 <button class="plus mx-2" type="button" name="button"><i class="fas fa-plus"> </i></button>
								</p>

							</div>

							<div class="text-center">
								<a class="btn buy-button py-2  px-5" href="{{ url('cart')}}">Buy Now</a>
									<a class="btn order-button py-2 px-5" href="{{ url('addToCart')}}">Add to Cart</a>
								</div>

							</div>

							<div class="delivery-col col-sm-12 col-md-3 col-lg-3 my-5 py-3">
								<small><strong>Delivery Options</strong></small><br>
								<small><strong>Address:</strong></small>
								<p><hr></p>
								<small><strong>Economy Delivery:</strong></small>
								<p><hr></p>
								<small><strong>Cash on Delivery Available</strong></small>
								<p><hr></p>
							</div>

						

						</div>
					</div> 
					
				</div>	

			</div><!-- end of landing-row -->

	</div>	

	<footer id="contact">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4 mt-5 mb-5">
					<p class="ml-4 mb-5">Customer Care</p>
					<small><a href="" >How to Buy</a></small><br>
					<small><a href="" >Shipping and Delivery</a></small><br>
					<small><a href="">Question?</a></small><br>
					<small><a href="">Contact Us</a></small><br>
					<small><a href="">Terms and Conditions</a></small>
				</div>

				<div class="col-sm-12 col-md-4 col-lg-4 mt-5 mb-5 text-center">
					<p class="mb-5">Follow Us</p>
					<div class="icon text-center">
						<a href=""><i class="fab fa-facebook-f fa-2x"></i></a>
					</div>
					<div class="icon text-center">
						<a href=""><i class="fab fa-instagram fa-2x"></i></a>
					</div>

				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 mt-5 mb-5">
					<p class="footer-content">&copyAyenics Arts n Crafts 2019</p>	
				</div>
			</div>
		</div>
		

	</footer>
		

	<script type="text/javascript". src="../assets/js/script.js"></script>


</body>


</html>