<?php 
	// conneection file attached here
    include('common/connection.php');
	
	// first time registration code satrt here 
	if(!empty($_POST['register']))
	{
		$fullname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['pw'];
		
		$query = "select * from user where email='$email'";
		$result = mysqli_query($connect, $query);
		$row = mysqli_num_rows($result);
		if($row)
		{
			echo " Email Exist Try Again!";
		}
		else
		{
			$query2 = "insert into user(fullname,email,password) values('$fullname','$email','$password')";
			$res = mysqli_query($connect, $query2);
			if($res == 'true')
			{
				?>
					<script>
						alert("Registration Completed");
					</script>
				<?php
			}
			
			else 
			{
				?>
					<script>
						alert("Registration failed, Try again..");
					</script>
				<?php 
			}
		}
	} 
    
?> 

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Registration Page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Overpass:wght@300&family=Raleway:ital,wght@0,200;0,300;0,400;0,800;1,400;1,600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>  
<body>
	<!-- login container start here -->
    <div class="login-container">
		<!-- registration form start here -->
        <div class="reg-form">
        <form method="post">
            <h2>Create an Account</h2>
            <input type="text" placeholder="Username" name="username" class="inp-field">
            <input type="email" placeholder="Email" name="email" class="inp-field">
            <input type="password" placeholder="Password" name="pw" class="inp-field">
            <input type="submit" class="login-btn" name="register" value="Register">
        </form>    
            <p class="login-link">Already have an account? <a href="signin.php">Login</a></p>
        </div>
		<!-- registration form end here -->
		
    </div>
	<!-- login container end here -->
</body>
</html> 