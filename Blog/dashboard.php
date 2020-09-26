<?php
	include("Includes/conn.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> BLOG | Dashboard </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
<!-- Google fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Tangerine|Baloo+Bhaina+2">	

<!-- External CSS -->
<link rel="stylesheet" href="CSS/dashboard.css" type="text/css">	
<link rel="stylesheet" href="CSS/new.css" type="text/css">	

	</head>
	
	<body>
	<div class="wrapper">
		<div class="banner">
			Blog Dashboard
		</div>

<!-- Panels -->
		<div class="content">
			
			<!-- Left Col -->
				<div class="left">
					<div class="vertical-nav">
					<ul>
						<li id="createPostBtn" class="active-nav-item"> <font color="black">Create post </font></li>
						<li  id="allPostBtn"> All posts </li>
						<li id="commentsBtn" style="display: none;"> Comments </li>
						<li id="settingsBtn" style="display: none;"> Settings </li>
					</ul>
					</div>
				</div>
			<!-- End of Left Col -->	
			
			<!-- Right Col -->
			
			<!-- Create post-->	
				<div class="right" id="createPost">
				
					<form method="POST" action="Process/postStory.php" enctype="multipart/form-data">
						<div class="post-panel">
					
							<span style="font-weight: bold; color: orange; font-size: 1.2rem; margin: 15px;"> Post </span> 
						
							<input type="text" class="post-title" placeholder="Post title" maxlength="100" id="postTitle" name="postHeader" />
						
							<input type="text" class="post-title" placeholder="Date" style="width: 10%;" id="dateBox" name="postDate" />
						
							<input  type="submit" class="post-link" style="margin-left: 10px; padding: 10px;" value="Publish" id="publishBtn" onmouseover="validate()" onclick="validate()" name="publishBtn" />
						
						</div>
					
						<div class="addImage">
							<span style="font-weight: bold; color: orange; font-size: 1.2rem; margin: 15px;"> Add image </span> <input type="file" name="file" />
						</div>	
					
						<div class="post-body" style="margin-top: 60px;">
							<font color="Black"><h3> Story #1 </h3></font>
							<textarea id="storyOne" name="postOne" placeholder="Story #1" style="width: 95%; height: 70%; margin: auto; min-height: 100px; padding: 10px; font-size: 1.3rem;" maxlength="1000" required> </textarea>
						</div>
					
						<div class="post-body">
							<font color="Black"><h3> Story #2 </h3></font>
							<textarea name="postTwo" placeholder="Story #2; optional" style="width: 95%; height: 70%; margin: auto; min-height: 100px; padding: 10px; font-size: 1.3rem;" maxlength="2000"> </textarea>
						</div>
					</form>
						
				</div>
			<!-- End of create post-->	
				
			<!-- All post -->	
				<div class="col-sm-9 right-col post-col" id="allPost">
<?php
					$retrieve_sql = "SELECT * FROM featured_story ORDER BY post_id DESC";
					$retrieve_process = mysqli_query($conn, $retrieve_sql);
					

					while($row = mysqli_fetch_assoc($retrieve_process)){
						echo "
						<div class=\"show-post\">
						
							<div class=\" show-post-image\">
								<img src=\"Uploads/$row[Image_Name]\" class=\" img-thumbnail\"> </img>
							</div>
							
							<div class=\"show-post-title\">
								$row[Story_Title]
							</div>
							
							<div class=\" show-post-date\">
								Last Edited: $row[Post_Date]
							</div>
							
							<div class=\" show-post-story-one\">
								$row[Post_One]
							</div>
							
							<div class=\" show-post-story-two\">
								$row[Post_Two]
							</div>
						</div>	
						
					";
						
					}
?>
						
				</div>
			<!-- End of all post -->		
			

			<!-- Comments -->		
				<div class="col-sm-9 right-col" id="comments">
					Comments
						
				</div>
			<!-- End of Comments -->
			
			<!-- Settings -->
				<div class="col-sm-9 right-col" id="settings">
					Settings
						
				</div>
			<!-- End of settings -->	
			<!-- End of RIght Col -->	
			</div>
		</div>
	
<!-- End of Panels -->		
		</div>
	
	
	
	
	
	
	
	
	
	<script>
		var dateBox = document.getElementById('dateBox');
		var  allPostBtn = document.getElementById('allPostBtn');
		var  createPostBtn = document.getElementById('createPostBtn');
		var  postTitle = document.getElementById('postTitle');
		var  storyOne = document.getElementById('storyOne');
		var  npBtn = document.getElementById('newPostBtn');
		
		
		function showAllPosts(){
			document.getElementById('allPost').style.display ="block";
			document.getElementById('createPost').style.display ="none";
		}
		
		function showCreatePost(){
			document.getElementById('allPost').style.display = "none";
			document.getElementById('createPost').style.display = "block";
		}
	
		function getDate(){
				var currentDate = new Date();
				dateBox.value = currentDate ;
		}
			
		dateBox.addEventListener("click", getDate)
		allPostBtn.addEventListener("click", showAllPosts);
		createPostBtn.addEventListener("click", showCreatePost);
		npBtn.addEventListener("click", showCreatePost);
		
		function validate(){
			if(postTitle.value == ''){
				alert("Title is required");
			}
		}
		
		publishBtn.addEventListener("click", validate);
	</script>	

	</body>
</html>

<?php
	mysqli_close($conn);
?>