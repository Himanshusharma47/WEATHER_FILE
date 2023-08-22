<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include('common/connection.php');
if(!empty($_GET['did']))
	{
		$did = $_GET['did'];
		$query = "delete from save_news where id = $did";
		if(mysqli_query($connect,$query))
		{
?>
			<script>
				alert("News Deleted");
			</script>
<?php
				
		}
		else
		{
?>
			<script>
				alert("News Not Deleted");
			</script>
<?php
			
		}
	}
?>
<html>

<head>
	<title>Profile</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Overpass:wght@300&family=Raleway:ital,wght@0,200;0,300;0,400;0,800;1,400;1,600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
	<?php
	// header file include here 
	include('common/header.php');
	?>

	<div class="profile-container">
		<?php

		if (!empty($_SESSION['user_name'])) {
			$userid = $_SESSION['user_id'];
			$query = "select * from save_news where userid=$userid";
			$result = mysqli_query($connect, $query);

			while ($row = mysqli_fetch_assoc($result)) {
		?>
				<p class="save-heading-line">Here is your saved news contents </p>
				<table class="news-tbl">
					<tr>
						<td>
							<!-- urlto image write below line pending -->
							<img src="<?php echo $row['urltoimg']; ?>" alt="News Thumbnail"><br>
							<span>share with your freinds.</span>
							<div class="share-container">
								<a href="https://www.facebook.com/sharer.php?u=<?php echo $row['url']; ?>"><img src="images/facebook1.png" alt="fb Logo"></a>
								<a href="https://twitter.com/share?url=<?php echo $row['url']; ?>&text=<?php echo $row['title']; ?>"><img src="images/twitter.png" alt="twitter Logo"></a>
								<a href="https://www.linkedin.com/shareArticle?url=<?php echo $row['url']; ?>&title=<?php echo $row['title']; ?>"><img src="images/linkedin.png" alt="linkedin Logo"></a>
								<a href="https://wa.me/?text=<?php echo $row['title']; ?> <?php echo $row['url']; ?>"><img src="images/whatsapp.png" alt="whatsapp Logo"></a>
							</div>
						</td>
						<td>
							<h2><?php echo $row['title']; ?></h2><br>
							<h3><?php echo $row['description']; ?></h5><br>
							<h5><?php echo $row['url']; ?></h5><br>
							<a href="profile.php?did=<?php echo $row['id'];?>"><input type="button" value="Delete" name="delete"  class="delete-btn"/></a>	
						</td>
					</tr>
				</table>
				<!-- news table start here -->

			<?php
				// echo $row['title']."<br>";
				// echo $row['url'];
			}
		} else {
			?>
			<script>
				alert("First Login");
			</script>
		<?php

		}
		?>
	</div>


</body>

</html>