<?php
	include('Includes/conn.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>BLOG | Browse all posts</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		<!-- Page Icon -->	
		<link rel="icon" type="image/ico" href="IMG/logo.png" />
		
		
		<!-- Dependencies set one -->
		<?php include('Includes/dependenciesone.php');?>
		
  
		<!-- External Stylesheets -->
		<link rel="stylesheet" href="CSS/home.css" type="text/css">
		<link rel="stylesheet" href="CSS/browse.css" type="text/css">
	</head>
	
	<body>
		<?php include('Includes/header.php'); ?>
	
		<div class="blog-posts" id="blogPosts">
							
<?php
		$retrieve_sql = "SELECT * FROM featured_story ORDER BY post_id DESC";
		$retrieve_process = mysqli_query($conn, $retrieve_sql);
		
		
			while($row = mysqli_fetch_assoc($retrieve_process)){
				$link = 'ignisblog/'.$row['Post_location'];
				$intro = substr($row['Post_One'], 0, 200);
						echo "	
						<div class=\"preview-wrapper\" style=\"width: 97%; padding: 20px; margin: auto; border: 1px solid #E1E1E2; margin-bottom: 20px; background-color: white; overflow: auto;  \">
							<div id=\"post-preview\">
								<div class=\"preview-image\">
									<img src=\"Uploads/$row[Image_Name]\"> </img>
								</div>
								
								<div class=\"preview-block\">
									<div class=\"story-header\">
										$row[Story_Title]
									</div>
								
									<div class=\"show-post-date\">
										Last Edited: $row[Post_Date]
									</div>
								
									<div class=\"show-post-author\">
										By: $row[Author]
									</div>
									
									<div class=\"story-text\">
									 <em>\"$intro...\" &nbsp </em> 
									 <br /><a href=\"$link\" target=\"_blank\">[Read more] </a>
									</div>
								</div>	
										
							</div>
						</div>	
						";
						
					}
					
					
?>	
		</div>
		
	<!-- Footer -->
	<?php include('Includes/footer.php'); ?>
		
	<!-- Dependencies set two -->
	<?php include('Includes/dependenciestwo.php');?>
	
	<!-- Custom JS -->
	<script src="JS/blogpage.js"></script>
	</body>
</html>	