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
				<li><a href="blogpage.php"> Home </a></li>
				<li><a href="browse.php"> Browse </a></li>
				<li>
					<form action="searchResults.php" method="POST">
						<input type="text" placeholder="Search" name="searchValue" id="searchBar" class="search-box" style="background-color: white; transition: 0.5s; border-radius: 0; color: black;" />
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