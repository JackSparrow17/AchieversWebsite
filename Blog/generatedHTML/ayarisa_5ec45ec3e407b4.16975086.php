
					<!DOCTYPE html>
					<html>
						<head>
							<title> BLOG | AYARISA</title>
							<meta charset="UTF-8">
							<meta name="viewport" content="width=device-width, initial-scale=1">
							<link rel="icon" type="image/ico" href="../IMG/logo.png" />
							<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
							<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Condensed">
							<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT Sans Narrow">
							<link rel="stylesheet" href="https://../Bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
							
							
							<!-- MDB -->
							<!-- Font Awesome -->
							<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
							<!-- Google Fonts Roboto -->
							<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
							<!-- Bootstrap core CSS -->
							<link rel="stylesheet" href="../MDB/css/bootstrap.min.css">
							<!-- Material Design Bootstrap -->
							<link rel="stylesheet" href="../MDB/css/mdb.min.css">
							
							<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
							<link rel="stylesheet" href="../CSS/home.css" type="text/css">
							<link rel="stylesheet" href="../CSS/responsive.css" type="text/css">
							
							<style>
.search-box::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
}

.search-box:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: white;
}

.search-box::-ms-input-placeholder { /* Microsoft Edge */
  color: white;
}
</style>
					</head>
					
					<body>
					<style>
.nav-custom ul li a, .nav-items ul li a:active, .nav-items ul li a:visited{
	color: black;
	text-decoration: none;
	transition: 0.5s;
	opacity: 0.7;
}

.nav-custom ul li a:hover{
	color: orange;
	text-decoration: none;
	transition: 0.5s;
	opacity: 1;
}

.social ul{
	padding: 0;
	margin: 0;
	list-style-type: none;
}

.social ul li{
	display: inline-block;
	margin: 0;
	padding: 10px 0px 10px 0px;
}
.social ul li span{
	padding: 20px 30px 20px 30px;
	transition: 1s;
	border-right: 1px #E8E8E8;
	opacity: 0.7;
}
.social ul li span:hover{
	padding: 20px 30px 20px 30px;
	background-color: orange;
	opacity: 1;
}

.social ul li a, .nav-items ul li a:active, .nav-items ul li a:visited{
	color: black;
	text-decoration: none;
}

.search-box{
	padding: 10px;
	border: 0;
	background-color: white;
	color: white;
	transition: 2s;
	border: 2px solid #4285F4;
	margin-right: -1px;
	border-radius: 0;
}


.search-box:hover{
	width: 300px;
	color: white;
	transition: 1s;
}

.searchBtn{
	padding: 15px 10px 15px 10px;
	border: 0px;
	color: white;
	margin-left: -4px;
	margin-top: -0.5px;
}

</style>
<div class="topnav fixed-top" style="z-index: 10; background-color: white; color: black; border-bottom: 1px solid black; padding-top: 10px;">
	<div class="hamburger">
		<button id="collapseBtn" style="background-color: white; border: 0px;"> <i class="fa fa-bars"></i> </button>
		<button id="uncollapseBtn" style="background-color: white; border: 0px;">  <i class="fa fa-bars"></i> </button>
	</div>
		<div  id="navContainer" class="nav-outter" style="width: 70%; margin: auto;">
		<div class="nav-custom">
			<ul>
				<li><a href="../blogpage.php"> Home </a></li>
				<li><a href="../browse.php"> Browse </a></li>
				<li>
					<form action="../searchResults.php" method="POST">
						<input type="text" placeholder="Search" name="searchValue" id="searchBar" class="search-box" style="background-color: white; transition: 0.5s; border-radius: 0;" />
						<input type="submit" value="Search" id="searchBtn" class=" searchBtn btn btn-primary btn-rounded" name="searchBtn"> </input>
					</form>
					
				</li>
			</ul>
		</div>
		
		<div class="social">
			<ul>
				<li><span><a href="https://www.facebook.com/IgnisEngineering/" target="_blank"> <i class="fa fa-facebook-f"></i> </a></span></li>
				<li><span><a href="https://twitter.com/IGNISENGINEERI1" target="_blank"> <i class="fa fa-twitter"></i> </a></span></li>
				<li><span><a href="https://www.ignisconstructions.com/#" target="_blank"> <i class="fa fa-linkedin-in"></i> </a></span></li>
			</ul>
		</div>
		
		</div>
</div>

<style>

.search-box::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #4285F4;
  opacity: 1; /* Firefox */
}

.search-box:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #4285F4;
}

.search-box::-ms-input-placeholder { /* Microsoft Edge */
  color: #4285F4;
}

.hamburger{
	width: 100%;
	display: none;
	padding: 10px;
	padding: 10px;
}

#uncollapseBtn{
	display: block;
}

#collapseBtn{
	display: none;
}

.nav-outter{
		width: 100%;
		overflow: auto;
		display: block;
	}

@media (max-width: 720px){
	.hamburger{
		display: flex;
		align-items: center;
	}
	.topnav{
		display: block;
		padding: 0;
	}
	.nav-custom{
		width: 100%;
		padding: 0;
	}
	.nav-custom ul li{
		display: block;
		text-align: center;
		border-bottom: 1px solid grey;
		width: 100%;
	}
	
	.nav-custom ul li:last-child{
		border: 0px;
	}
	
	.nav-outter{
		width: 100%;
		overflow: auto;
		display: none;
	}
}
</style>

<script>
	var collapseBtn = document.getElementById('collapseBtn');
	var uncollapseBtn = document.getElementById('uncollapseBtn');
	var collapseNav = document.getElementById('navContainer');
	var blogPosts = document.getElementById('blogPosts');
	
	function hideNav(){
		collapseNav.style.display = "none";
		uncollapseBtn.style.display = "block";
		collapseBtn.style.display = "none";
		
	}
	
	function showNav(){
		collapseNav.style.display = "block";
		uncollapseBtn.style.display = "none";
		collapseBtn.style.display = "block";
		blogPosts.style.border = "1px solid red";
	}
	
	collapseBtn.addEventListener("click", hideNav);
	uncollapseBtn.addEventListener("click", showNav);
	
	 

</script>
						
						<div style="width: 75%; padding: 20px; margin: auto; border: 1px solid #E1E1E2; margin-bottom: 60px; background-color: white; margin-top: 100px;">
							<div id="story-item">
								
								<div class="story-header">
									AYARISA
								</div>
								
								<div class="show-post-date">
									Last Edited: Tue May 19 2020
								</div>
								
								<div class="show-post-author">
									By: IGNIS
								</div>
								
								<div class="story-image">
									<img src="../Uploads/5ec45ec3e3c2c8.94433770.png"> </img>
								</div>
		
								<div class="story-text" style="">
									<p>Introducing; the Ayarisa medical app for mobile phones. You personal health assistant.
									<p>
								</div>
										
							</div>
						</div>
						
<!-- Footer -->
<footer class="page-footer font-small  pt-4" style="background-color: black;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">IGNIS ENGINEERING & CONSTRUCTION </h6>
        <p>IGNIS Engineering and Construction is a Ghanaian owned company that introduces innovative, efficient and cost-effective building technologies into the Ghanaian space.
IGNIS has come up with innovative housing designs that are eco-friendly and cover lest cost in its build..</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Services</h6>
        <p>
          <a href="#!">Civil Construction</a>
        </p>
        <p>
          <a href="#!">Renovation</a>
        </p>
        <p>
          <a href="#!">Interior & Exterior Designs</a>
        </p>

      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"> Navigation</h6>
        <p>
          <a href="blogpage.php">Home</a>
        </p>
        <p>
          <a href="browse.php">Browse</a>
        </p>
        <p>
          <a href="#!">News</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p> 
			<i class="fas fa-home mr-3"></i> Greater Accra, Ghana. 	
			<br />Hse. No. 25 Batsonaa Central, Off Spintex Rd, Community 17 – Tema
		</p>

        <p>
          <i class="fas fa-envelope mr-3"></i> Email: info@ignisconstructions.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +233 24 224 4518</p>
        <p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://ignisconstructions.com/">
            <strong> ignisconstructions.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/IgnisEngineering/" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://twitter.com/IGNISENGINEERI1" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
			
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.ignisconstructions.com/#" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

<!-- Latest compiled and minified JavaScript -->
	<script src="../Bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
<!-- jQuery -->
  <script type="text/javascript" src="../MDB/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../MDB/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../MDB/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../MDB/js/mdb.min.js"></script>

					</body>	
				</html>	
				
				