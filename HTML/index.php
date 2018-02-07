<html>

<head>

	<title>Vacation Rentals, Homes, and Cheap Rates</title>
	<!-- CSS FILE LINK BELOW -->
	<link rel="stylesheet" type="text/css" href="../CSS/main-CSS.css">
	<script defer href="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!-- NAVBAR SECTION -->
<header>
      <div class="collapse bg-light" id="navbarHeader">
		<div class="container col-md-12">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4 text-center">
              <h4 class="text-black">About Us</h4>
              <p class="text-muted">Founded in 2008, Airbnb’s mission is to create a world where people can belong when they travel by being connected to local cultures and having unique travel experiences. Its community marketplace provides access to millions of unique accommodations from apartments and villas to castles and treehouses in more than 65,000 cities and 191 countries.
									With Experiences, Airbnb offers unprecedented access to local communities and interests, while Places lets people discover the hidden gems of a city as recommended by the people that live there. Airbnb is people powered and the easiest way to earn a little extra income from extra space in a home or from sharing passions, interests and cities.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4 text-left">
			<h4>Services</h4>
              <ul class="list-unstyled list-unstyled-header">
                <li><a href="#" class="text-black">Become a host</a></li>
                <li><a href="#" class="text-black">Help</a></li>
                <li><a href="#" class="text-black">Sign Up</a></li>
				<li><a href="#" class="text-black">Log In</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-light box-shadow">
        <div class="container col-md-12 d-flex flex-row justify-content-between">
          <a href="#" class="navbar-brand d-flex p-1">
            <img src="../Images/airbnb-logo.png" width="98" height="70"/>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
</header>

<!-- MAIN JUMBOTRON -->
<div class="jumbotron text-left">
	<section class="container-fluid">
		<div class=" container-jumbo">
			<div>
				<p class="jumbotron-heading airbnb"><strong>Airbnb</strong></p>
				<p class="jumbo-font">Book unique homes and experiences all over the world.</p>
					
			</div>
			<div class="box">
				<div class="searchIcon">
					<input type="text" id="search" name="search" placeholder='Try "Ibiza"' />
					<a href="#"><button class="icon"><i class="fa fa-search whiteIcon"></i></button></a>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- CARDS -->
<div class="jumbotron text-left">
	<div class="container-fluid">
		<div class="exploreAirbnb">
		  <h3>Explore Airbnb</h3>
			<div class="row">
				<div class="card text-center">
					<div class="header-card">
						<img src="../Images/homes.jpg" width="225" height="100" />
					</div>
					<div class="container">
						<p>Homes</p>
					</div>
				</div>
				
				<div class="card text-center">
					<div class="header-card">
						<img src="../Images/homes.jpg" width="225" height="100" />
					</div>
					<div class="container">
						<p>Experiences</p>
					</div>
				</div>
				
				<div class="card text-center">
					<div class="header-card">
						<img src="../Images/homes.jpg" width="225" height="100" />
					</div>
					<div class="container">
						<p>Restaurants</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- FOOTER -->
<footer class="page-footer center-on-small-only stylish-color-dark">
    <!--Footer Links-->
    <div class="container text-left">
        <div class="row">
            <!--First column-->
            <div class="col-md-4">
                <select class="selectPicker" data-width="fit">
					<option>English</option>
					<option>Español</option>
				</select>
				<select class="selectPicker" data-width="fit">
					<option>United States dollar</option>
					<option>Japanese Yen</option>
				</select>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 mx-auto">
                <h5 class="title mb-4 mt-3 font-bold">Airbnb</h5>
                <ul class="list-unstyled airbnb-links">
                    <li><a href="#!">Careers</a></li>
                    <li><a href="#!">Press</a></li>
                    <li><a href="#!">Policies</a></li>
                    <li><a href="#!">Help</a></li>
					<li><a href="#!">Diversity & Belonging</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-2 mx-auto">
                <h5 class="title mb-4 mt-3 font-bold">Discover</h5>
                <ul class="list-unstyled airbnb-links">
                    <li><a href="#!">Trust & Safety</a></li>
                    <li><a href="#!">Travel Credit</a></li>
                    <li><a href="#!">Gift Cards</a></li>
                    <li><a href="#!">Airbnb Citizen</a></li>
					<li><a href="#!">Business Travel</a></li>
					<li><a href="#!">Guidebooks</a></li>
					<li><a href="#!">Airbnbmag</a></li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="title mb-4 mt-3 font-bold ">Hosting</h5>
                <ul class="list-unstyled airbnb-links">
                    <li><a href="#!">Why Host</a></li>
                    <li><a href="#!">Hospitality</a></li>
                    <li><a href="#!">Responsible Hosting</a></li>
                    <li><a href="#!">Community Center</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->
    <hr>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid footer-block col-md-12">
			<div class="row">
				<div class="col-md-6 text-left">
					<span>
						<p><img src="../Images/airbnb-logo.png" width="56" height="40" />© Lennard Neuwirth</p>
					</span>
				</div>
				<div class="col-md-6 text-right">
					<ul class="list-unstyled footer-links text-muted">
						<li><a href="#" >Terms</a></li>
						<li><a href="#" >Privacy</a></li>
						<li><a href="#" >Site Map</a></li>
						<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" ><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
        </div>
    </div>
    <!--/.Copyright-->

</footer>

</body>

</html>