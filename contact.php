<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include('common/connection.php');

if (!empty($_POST['save'])) {
	$fullname = $_POST['fname'];
	$email = $_POST['email'];
	$message = $_POST['msg'];
	$query = "insert into contact (fullname,email,message) values('$fullname','$email', '$message')";
	if ($result = mysqli_query($connect, $query)) {
?>
		<script>
			alert("Info Saved Successfully");
		</script>
	<?php
	} else {
	?>
		<script>
			alert("Info Not Saved");
		</script>
<?php
	}
}
?>

<html>

<head>
	<link rel="stylesheet" href="style.css">
	<title>Contact Form</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Overpass:wght@300&family=Raleway:ital,wght@0,200;0,300;0,400;0,800;1,400;1,600&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
	<?php
	// header file include here 
	include('common/header.php');
	?>

	<div class="contact-form">
		<h2>Contact Us</h2>
		<form method="post">
			<div class="form-group">
				<input type="text" id="full-name" name="fname" placeholder="Full Name" required>
			</div>
			<div class="form-group">
				<input type="email" id="email" name="email" placeholder="Email" required>
			</div>
			<div class="form-group">
				<textarea id="message" name="msg" placeholder="Message" rows="4" required></textarea>
			</div>
			<input type="submit" name="save" value="Save" class="cont-sv-btn">
		</form>
	</div>
</body>

</html>