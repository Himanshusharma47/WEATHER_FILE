<!-- header section start here  -->
	<div class="header">
		<!-- inside header start here -->
		<div class="inside-header">
			<!-- left section of header start here  -->
			<div class="left">
				<div><img src="images/lg.png" class="icon"></div>
				<div class="w-line">Weather Vue</div>
			</div>
			<div class="left">
				<form method="get">
					<input type="text" name="cityname" autofocus class="srchbar"  placeholder="e.g. Ludhiana, Kolkata, Bengaluru">
					<input type="submit" class="srch-btn" name="search" value="search">
				</form>
			</div>
			<!-- left section of header end here  -->

			<!-- right section of header start here  -->
			<div class="right">
				<ul class="nav-ul">
					<li><a href="user.php">Weather</a></li>
					<li><a href="news.php">News</a></li>
					<!--<li><a href="signin.php">Login</a></li>-->
					<li>
				<?php 
					// var_dump($_SESSION['uname']);
					// die();
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