<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" content="width=device-width, initial-scale=1" />
<title>Spijk Beers</title>
<link rel="stylesheet" type="text/css" href="styling.css" />
<link href='https://fonts.googleapis.com/css?family=Anton'
	rel='stylesheet'>
</head>

<body>
	<div class="pagewrapper">
		<div class="adminlogin">
			<a href="Adminpage.php"> Admin Tools<br><br><br></a>
			<a href="Adminlogin.php"> Admin Login<br>Login function not implemented. The user would be able to enter the correct admin details in order to get access to the admin tools. Admin tools are therefore open for everyone to see.</a>
		</div>
			<img class="headerlogo" src="photos/logo.png" style="width:200px;height:200px;" href="#pagetop">
		<div class="headertitle" id="pagetop">
			<h1>Spijk Craft Beers</h1>
			<h3>| NZ HOPS | NZ TASTE | NZ MADE |</h3>
			<h4> 143 Wallace Street, Wellington - 0800 83 83 83</h4>
		</div>

<!-- navigation bar -->

	<div class="sidenav">
		<nav id="logoheader">
			<pre> <!--the pre tag keeps the in-editor format of text-->
<a href="#aboutus">About Us</a>

<a href="#products">Products</a>

<a href="#meettheteam">Meet the Team</a>

<a href="#locations">Location</a>

<a href="#booktable">Make a Booking</a>

<a href='#makeorder'>Place an Order</a>

</pre>
		</nav>
	</div>


	<div class = "aboutussection" id="aboutus">
	<section>
		<h2>About Us</h2>
		<p>Welcome to Spijk Brewery. We are a local brewery that opened up on December 1, 2020. Our incredibly experienced and dedicated team of three is ready to provide the best brews for the Wellington region. Pop in for a visit! </p>
	</section>
</div>

<!-- Section with all of the products and their descriptions -->

<div class="productsection" id="products">
	<section>
		<h2>Products</h2>
		<p> We source our hops from local growers in New Zealand. Sometimes, we like to experiment with different hop strains, so there may be times where we have sourced from overseas. We will let you know if that's the case.
	</div>
			<div class="beer1">
				<h4>Pretty-Awesome Pale-Ale</h4>
				<img src="photos/paleale.jpg" style="width:200px;height:200px;">
				<p>There's no beating this one. A pretty pale-ale glow and an awesome taste. </p>
				</div>
				<div class="beer2">
						<h4>Peachy Pilsner</h4>
					<img src="photos/pilsner.jpg"style="width:200px;height:200px;">
					<p> A pilsner with a peach infusion. </p>
					</div>
					<div class="beer3">
						<h4>Sneaky Stout</h4>
						<img src="photos/stout.jpg" style="width:200px;height:200px;">
						<p> A 10% russian-styled brew that will definitely sneak up on you. </p>
					</div>
						<div class="beer4">
								<h4>Original Mystery Beer</h4>
							<img src="photos/original.jpg" style="width:200px;height:200px;">
							<p> We sample some hops. We give you it for $3 a pint. Experimental! (5% alcoholic content) </p>
	</section>
	</div>

<!-- Meet the team section with photo gallery of staff and descriptions for each staff member -->

<div class="teamsection" id="meettheteam">
	<section>
	<h2>Meet the team</h2>
	</section>
		<img class="galleryslides" src="photos/Mike.jpg" style="width:100%;height:auto;"> <!--Give all these images same class relation to chuck them in a gallery -->
		<img class="galleryslides" src="photos/perez.jpg" style="width:100%;height:auto;">
		<img class="galleryslides" src="photos/kyle.jpg" style="width:100%;height:auto;">
		<button onclick="changePhoto(-1)">&#10094;</button> <!-- left button. uses my JS method, which initiates the changePhoto method and sets the current photo and description to be 1 less -->
<button onclick="changePhoto(+1)">&#10095;</button>
		<p class="desc"> Alice has moved here from Rotorua this year. She has over 10 years experience brewing beers. Her favourite Spijk brew is the Pretty-Awesome Pale-Ale.  </p>
		<p class="desc"> Perez has come from overseas to help us out. He has a great brewing style. His favourite Spijk beer is the Sneaky Stout.</p>
		<p class="desc"> Kyle started the brewery on the 1st december 2020. He is a veteran of the brewing game. His favourite Spijk brew is the Peachy Pilsner. </p>
</div>

<!-- location section with the map -->

	<div class="locationsection">
	<section id="locations">
		<h2>Location</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.090070079801!2d174.77315221599574!3d-41.306904149600804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38afe199e8e955%3A0x3576fb2b09f1409a!2s143%20Wallace%20Street%2C%20Mount%20Cook%2C%20Wellington%206021!5e0!3m2!1sen!2snz!4v1606620806636!5m2!1sen!2snz" width="70%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<h3>Our brewery is located at 143 Wallace Street</h3>
		<!-- Put a map here with a pinpoint -->
	</section>
</div>

<!-- Make a booking form -->

<div class="bookingsection" id="booktable">
	<section id="bookings">
		<h2> Make a Booking </h2>
	</section>
	<hr>
	<form class="formslides">
	</form>
	<form class = "bookingform" method = "post">
	<label for="fname">First name:</label><br>
<input type="text" id="fname" name="fname" placeholder="e.g. John" required><br>
<label for="lname">Last name:</label><br>
<input type="text" id="lname" name="lname" placeholder="e.g. Doe" required><br>
<label for="time">Time:</label><br>
<input type="text" id="time" name="time" placeholder="e.g. 7pm" required><br>
<label for="date">Date:</label><br>
<input type="text" id="date" name="date" placeholder="e.g. 20/12/20" required><br>
<label for="date">Contact Email:</label><br>
<input type="text" id="email" name="email" placeholder="e.g. john.doe@gmail.com" required><br>
<label for="date">Contact Number:</label><br>
<input type="text" id="Cellphone" name="cellphone" placeholder="e.g. 027 111 1111" required><br><br>
<input type="submit" name="submitbooking" value="Submit"><br><br><br><br>
</form>
</div>

<!-- The order form -->

<div class="ordersection" id="makeorder">
	<section id="bookings">
		<h2> Place an Order</h2>
	</section>
	<hr>
	<form class = "orderform" method="post">
	<label for="fname">First name:</label><br>
<input type="text" id="fnameorder" name="fnameorder" placeholder="e.g. John" required><br>
<label for="lname">Last name:</label><br>
<input type="text" id="lnameorder" name="lnameorder" placeholder="e.g. Doe" required><br>
<label for="time">Product:</label><br>
<input type="text" id="productorder" name="productorder" placeholder="e.g. Pilsner" required><br>
<label for="date">Quantity:</label><br>
<input type="text" id="quantityorder" name="quantityorder" placeholder="e.g. 2" required><br>
<label for="number">Contact Number:</label><br>
<input type="text" id="cellphoneorder" name="cellphoneorder" placeholder="e.g. 027 111 1111" required><br>
<label for="email">Contact Email:</label><br>
<input type="text" id="emailorder" name="emailorder" placeholder="e.g. john.doe@gmail.com" required><br><br>
<input type="submit" name="submitorder" value="Submit"><br><br><br><br>
</form>
</div>

<!-- footer section -->

	<footer class = "footersection" id = "footerplace">Spijk Breweries<br>0800 83 83 83<br>spijkbrewery@gmail.com<br>143 Wallace Street, Mount Cook, Wellington, 6021</footer>
</div>
<script src="actions.js"></script> <!-- external javascript -->
</body>
</html>

<?php include('formfunctions.php') ?>
