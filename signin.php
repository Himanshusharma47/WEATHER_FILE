<?php
	session_start();
    include ('common/connection.php');
    
    if(!empty($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['pw'];
		$query = "select * from user where fullname='$username' and password='$password'";
		$result = mysqli_query($connect, $query);
		$count = mysqli_num_rows($result);
		if($count > 0)
		{
				setcookie("username","$username");
				setcookie ("password","$password");
			
				$_SESSION['uname'] = "set";
				
				// this is use bcoz we want email which is al ready login in weather app 
				$_SESSION['user_name'] = $username ;
				header ('location: user.php');
			?>
				<script>
					alert("Login successful");
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					alert('Login Not success');
				</script>
			<?php
		}
	}
    
    if(!empty($_GET['log']))
	{
		session_destroy();
	}
    
?>

<?php
	// add google and facebook login api button code 
 require_once 'vendor/autoload.php';
	$google_client = new Google_Client();
	$google_client->setClientId('1014468972651-cr9alc5faagq0oad8527uq0q5r0h8l91.apps.googleusercontent.com');
	$google_client->setClientSecret('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');
	$google_client->setRedirectUri('http://localhost/WEATHER_FILE/user.php');
	$google_client->addScope("email");
	$google_client->addScope("profile");
	$_SESSION['uname'] = "set" ;

	$fb = new Facebook\Facebook([
	  'app_id' => '310244154907884',
	  'app_secret' => 'c0748a4ab601a0092bf7d3e646a53f5d',
	  'default_graph_version' => 'v2.10',
	]);	
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email']; 
	$loginUrl = $helper->getLoginUrl('http://localhost/WEATHER_FILE/user.php', $permissions);
?>



<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Overpass:wght@300&family=Raleway:ital,wght@0,200;0,300;0,400;0,800;1,400;1,600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
	<!-- login container start here -->
    <div class="login-container">
		<!-- login form end here -->
        <div class="login-form">
			<form method="post">
				<h2>Login</h2>
				<input type="text" placeholder="Username" name="username" class="inp-field">
				<input type="password" placeholder="Password" name="pw" class="inp-field">
				<input type="submit" name="login" value="Login" class="login-btn">
			<form>    
			<p class="signup-line">Don't have an account? <a href="index.php">Sign Up</a></p>
        </div>
		<!-- login form end here -->
		<!-- api container start here -->
        <div class="api-container">
			<!-- or line start here-->
            <div class="or-line">
                <span>or</span>
            </div>
			<!-- login options start here -->
             <div class="login-opts">
				<!-- login option start here -->
                <div class="login-opt">
                    <a href="<?php echo $google_client->createAuthUrl(); ?>"><img src="images/google-logo.png" alt="Google Logo" class="gf-icon">Continue with Google</a>
                </div>
                <div class="login-opt" id="fb-login">
                    <a href="<?php echo $loginUrl; ?>"><img src="images/fb.png" alt="Facebook Logo" class="gf-icon">Continue with Facebook</a>
                </div>
				<!-- login option end here -->
            </div>
			<!-- login options end here -->
        </div>
		<!-- api container end here -->
    </div>
	<!-- login container end here -->
</body>
</html>
