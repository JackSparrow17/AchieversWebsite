<?php
	include('Includes/conn.php');
	$searchValue = $_POST['searchValue'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Search Results (<?php echo $searchValue;?>)</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		
		
		
		<!-- Dependencies set one -->
			<!-- Google fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto Condensed">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT Sans Narrow">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://Bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		
		<!-- MDB -->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<!-- Google Fonts Roboto -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="MDB/css/bootstrap.min.css">
		<!-- Material Design Bootstrap -->
		<link rel="stylesheet" href="MDB/css/mdb.min.css">

		<!-- Font awesome icons -->
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<!-- External Stylesheets -->
		<link rel="stylesheet" href="CSS/home.css" type="text/css">
		<link rel="stylesheet" href="CSS/browse.css" type="text/css">
		
	</head>
	
	<body>
	<?php include('Includes/header.php'); ?>	
		<div class="blog-posts"" id="searchWrapper">
		
<?php
		
		
		if(isset($_POST['searchBtn']) && !empty($searchValue)){
			$search_sql = "SELECT * FROM `featured_story` WHERE Story_title LIKE '%".$searchValue."%' ORDER BY post_id DESC";
			$search_run = mysqli_query($conn, $search_sql);
			$num_results = mysqli_num_rows($search_run);
			
			
			if(!$search_run){
				echo 'No results';
			}else{
				echo "
				<h2>Search results for <em> \"$searchValue\" </em></h2>
				<h3><font color=\"red\">".$num_results."</font> result(s) found.</h3>
				
				";
				while($row = mysqli_fetch_assoc($search_run)){
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
			}
		}else{
			echo 'No results';
			die;
		}
?>		
		</div>


<!-- Footer -->
	<?php include('Includes/footer.php'); ?>
	
	
<!-- Dependencies set two -->
	<?php include('Includes/dependenciestwo.php');?>		
	</body>
</html>