<?php include("connect.php");

if(isset($_POST['username'])){
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	
	$sql = "select * from th_admin where username = '".$uname."' AND password = '".$pass."' limit 1";
	
	$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) == 1){
		$_SESSION['username'] = $uname;
		header('location:dashboard.php');
	} else {
		echo("<script type='text/javascript'>
				window.alert('Invalid Credentials');
				window.location.href='index.php';
			</script>");
	}
	
}

?>



<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title>TravelHut</title>
		
		<!-- Stylesheets starts -->
		<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
		<link rel='stylesheet' href='css/main.css'>
		<!-- End of Stylesheets -->
	</head>
	
	<body class='login-body'>
		<!-- Login Form -->
		<div class='login-container d-flex align-items-center justify-content-center'>
			<form class='login-form text-center' method='post'>
				<h2 class='mb-5 font-weight-light text-uppercase'>TravelHut</h2>
				<!-- <img src='images/logo.png' class='img-fluid' style='width:250px; height: 250px;' alt='brand image'> -->
				<div class='form-group'>
					<input type='text' name='username' placeholder='Username' class='form-control form-control-lg rounded-pill' required>
				</div>
				
				<div class='form-group'>
					<input type='password' name='password' placeholder='Password' class='form-control form-control-lg rounded-pill' required>
				</div>
				
				<div class='forgot-link d-flex align-items-center justify-content-between'>
					<div class='form-check'>
						<input type='checkbox' class='form-check-input' id='remember'>
						<label for='remember'>Remember me</label>
					</div>
					<a href='#'>Forgot Password?</a>
				</div>
				
				<button type='submit' class='btn btn-block btn-custom btn-lg btn-block rounded-pill text-uppercase mt-5'>Login</button>
			</form>
		</div>
		<!-- End of Login Form -->
		
		<!-- Scipt language starts -->
		<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
		<script src='js/main.js'></script> 
		<!-- End of Script language -->
	</body>
</html>