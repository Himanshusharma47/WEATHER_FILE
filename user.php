<?php
 if(session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		
if(empty($_SESSION['uname']))
{
	header('location: signin.php');
}

// weather data file include here where current and 5days data is created already
include ('weather_data.php');


?>

<html>

<head>
	<title>Weather Forecast Vue</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Overpass:wght@300&family=Raleway:ital,wght@0,200;0,300;0,400;0,800;1,400;1,600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
	<?php
	// header file include here 
	include ('common/header.php');
	?>

	<!-- main content start here  -->
	<div class="main-container">

		<!-- inner-container start here -->
		<div class="inner-container">
			<!-- box-conatiner start here  -->
			<div class="box-container1">
				<!-- innserbox-top1 start here -->
				<div class="innerbox-top1">
					<ul class="txt-center">
						<li><img src="images/wind1.png" class="innerbox-icon"><?php echo !empty($windspeed) ? $windspeed : ''; ?></li>
						<li><img src="images/humi.png" class="innerbox-icon"><?php echo !empty($hmd) ? $hmd : ''; ?></li>
						<li><img src="images/pre.png" class="innerbox-icon"><?php echo !empty($pressure) ? $pressure : ''; ?></li>
						<li><img src="images/srr.png" class="innerbox-icon"><?php echo !empty($sunrise) ? $sunrise : ''; ?></li>
						<li><img src="images/ss.png" class="innerbox-icon"><?php echo !empty($sunset) ? $sunset : ''; ?></li>
					</ul>
				</div>
				<!-- innserbox-top1 end here -->
				<!-- innserbox-top2 start here -->
				<div class="innerbox-top2">
					
					<div><img src="images/logo.png" class=""></div>
					<ul>
						<li>
							<h1><?php echo !empty($name) ? $name : ''; ?></h1>
						</li>
						<li>
							<h1 class="yellow-clr"><?php echo !empty($temp) ? $temp : ''; ?></h1>
						</li>
						<li>
							<h5><?php echo !empty($feel) ? $feel : ''; ?></h5>
						</li>
						<li>
							<h3><?php echo !empty($desc) ? $desc : ''; ?> </h3>
						</li>
						<li>
							<h3><?php echo !empty($dayname) ? $dayname : ''; ?> <?php echo !empty($date) ? $date : ''; ?></h3>
						</li>

					</ul>
				</div>
				<!-- innserbox-top2 end here -->
			</div>
			<!-- box container end here -->

			
			<!-- box container2 start here -->
			<div class="box-container2">
				<h2>5 Days Weather Forecast</h2>
				<?php
				
				if(!empty($daydata))
				{
				$target_time = "21:00:00";
				
				foreach ($daydata["list"] as $row) {
					$current_timestamp = $row["dt_txt"];
					
					if (strpos($current_timestamp, $target_time) !== false) {
				?>
						<!-- table container start here -->
						<div class="tbl-container">
							<!-- inner table start here -->
							<table class="inner-tbl">
								<tr>
									<th></th>
								</tr>
								<tr>
									<td>Date|Time:</td>
									<td ><?php echo $row["dt_txt"]; ?></td>
								</tr>
								<tr>
									<td>Temp :</td>
									<td><?php echo round($row["main"]["temp"]) . "&degC"; ?></td>
								</tr>
								<tr>
									<td>Pressure :</td>
									<td><?php echo $row["main"]["pressure"] . " mbar"; ?></td>
								</tr>
								<tr>
									<td>Humidity :</td>
									<td><?php echo $row["main"]["humidity"]." %"; ?></td>
								</tr>
								<tr>
									<td>W Speed :</td>
									<td><?php echo $row["wind"]["speed"]."km/h"; ?></td>
								</tr>
								<tr>
									<td>Gust :</td>
									<td><?php echo $row["wind"]["gust"]."km/h"; ?></td>
								</tr>
							</table>
							<!-- inner table end here -->
						</div>
						<!-- table container start here -->
				<?php
					}
				}
				}else{
				?>
					<script>
						alert("5 Days Data Not Fetch");
					</script>
				<?php
				}
				?>

			</div>
			<!-- box container end here -->
		</div>
		<!-- inner-container end here -->
	</div>
	<!-- main section end here  -->
</body>

</html>