<?php
	// find debugg
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}	
	
		$jsonfile = ('news.json');

		$api_key = "b827991aab044b08a791b502e65e71c2";
		
		// mandatory to copy this link and paste in google search and seach if data is occure there then it will work here,otherwiae it will generate error
		$api_url="https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=$api_key";
		$urldata = @file_get_contents($api_url);
		if(!empty($urldata))
		{
			$data = json_decode($urldata,true);
			$putdata = file_put_contents($jsonfile,json_encode($data,JSON_PRETTY_PRINT));
		}
		else
		{
		?>
			<script>
				alert("Current Data is Not Available! Try After Some Time");
			</script>
		<?php
		}
?>


<html>
	<head>
		<title>News Nation</title>
		<link rel="stylesheet" href="style.css" >
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Overpass:wght@300&family=Raleway:ital,wght@0,200;0,300;0,400;0,800;1,400;1,600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	</head>
	<body>
		<!-- header section start here  -->
		<div class="header">
			<!-- inside header start here -->
			<div class="inside-header">
				<!-- left section of header start here  -->
				<div class="left">
					<div><img src="images/newspaper.png" class="icon"></div>
					<div class="w-line">The News Nation</div>
				</div>
				<div class="left">
					
				</div>
				<!-- left section of header end here  -->
				
				<!-- right section of header start here  -->
					<div class="right">
						<ul class="nav-ul">
							<li><a href="user.php" >Weather</a></li>
							<li><a href="news.php">News</a></li>
							<!--<li><a href="signin.php">Login</a></li>-->
							<li>
						<?php 
							if(empty($_SESSION['uname']))
							{
						?>
							<a href="signin.php">Login</a>
						<?php
							}else
							{
						?>
							<a href="signin.php?log=1">Logout</a>
							
						<?php } ?>
							</li>
						</ul>
					</div>
				<!-- right section of header end here  -->
			</div>
			<!-- inside header end here -->
		</div>
		<!-- header section end here  -->
		
		<!-- main content start here  -->
		<div class="main-container1">
			
			<!-- news-container start here -->
			<div class="news-container">
				<div class="headline">Top 10 BBC News</div>
			<?php 
				if(!empty($data))
				{
					foreach ($data['articles'] as $row) 
					{
			?>
				<!-- news table start here -->
				<table class="news-tbl">
					<tr>
						<td><img src="<?php echo $row['urlToImage']; ?>" alt="News Thumbnail" ></td>
						<td>
							<h2><?php echo $row['title']; ?></h2><br>
							<h3><?php echo $row['description']; ?></h5><br>
							<p><?php echo $row['content']; ?> <a href="<?php echo $row['url']; ?>">Read more..</a></p><br>
							<h5><?php echo $row['author']; ?></h5>
							<h5><?php echo $row['publishedAt']; ?></h5>
						</td>
					</tr>
				</table>
				<!-- news table start here -->
			<?php 
				}}else
				{
			?>
					<script>
						alert("Data Not Fetch");
					</script>
			<?php		
				}
			?>	
				
			</div>
			<!-- news-container end here -->
		</div>
		<!-- main container1 end here  -->
	</body>
</html>