<?php
	// Turn off all error reporting
	//error_reporting(0);	

	$conn = mysqli_connect("localhost", "root", "", "ignis_blog1");	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IGNIS | BLOG</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		<!-- Page Icon -->	
		
		<!-- Dependencies set one -->
		<?php include('Includes/dependenciesone.php');?>
		
		<!-- External Stylesheets -->
		<link rel="stylesheet" href="CSS/home.css" type="text/css">
		
		
		
		<style>
			#clear{
				clear: both;
			}
			
			
		</style>
	</head>

	<body>
	
	<?php
		include('Includes/header.php');
	?>
	
	<div class="page-content" id="content" style="margin-top: 100px;">
		<div class="user-bar">
			<div class="get-social-div">
					<div class="get-social-header">
						Connect with us online
					</div>
			<!-- Social media handles -->
					<div class="get-social-icons">
						<ul>
							<li><a href="https://www.facebook.com/IgnisEngineering/" target="_blank"><span> <i class="fa fa-facebook-f"></i> </span></a></li>
							<li><a href="https://twitter.com/IGNISENGINEERI1" target="_blank"><span> <i class="fa fa-twitter"></i> </span></a></li>
							<li><a href="https://www.ignisconstructions.com/#" target="_blank"><span> <i class="fa fa-linkedin-in"></i> </span></a></li>
						</ul>
					</div>
					
				
				</div>
				
				<!-- Email news letter -->		
					<div class="get-social-div newsletter-div">
						<div class="get-social-header">
							Email Newsletter
						</div>
					
						<div class="get-social-icons text-area-grey">
							Sign up to receive email updates and to hear what's going on with us
						</div>
						
						<div class="get-social-icons email-newletter-form">
							<form method="POST" action="Process/emailNewsLetter.php">
								<input type="text" placeholder="Full name" required="" class="full-name-box" name="fullname" />
								<input type="email" placeholder="Email" required="" class="email-box" name="email" />
								<button type="Submit" name="subscribeBtn"> <i class="fa fa-paper-plane"></i> Subscribe </button>
							</form>
						</div>
					
					</div>
		</div>
		
		<div class="blog-posts">
			<div  id="map-div" >
				<div><iframe width="100%" height="500" id="gmap_canvas"
					src="https://maps.google.com/maps?q=Tema%2C%20Community%2017%2C%20Ashaiman%20Lashibi%20Road%2C%20Tema%2C%20Ghana&t=&z=17&ie=UTF8&iwloc=&output=embed"
					frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                    href="https://www.embedgooglemap.net/text-tools/remove-spaces/"></a></div>
        
				</div>
		</div>
		
		<div id="clear"> </div>
		
	
		<!-- Footer -->
		<?php include('Includes/footer.php');?>
	</div>
	
	
	
	<!-- Dependencies set two -->
	<?php include('Includes/dependenciestwo.php');?>
	
	<!-- Custom JS -->
	<script src="JS/blogpage.js"></script>
	
	</body>
</html>
