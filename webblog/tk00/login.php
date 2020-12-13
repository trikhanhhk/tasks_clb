<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/login/util.css">
	<link rel="stylesheet" type="text/css" href="style/login/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php 
	require('../public_html/mysqlconnect.php');
	if(isset($_REQUEST['submit'])){
		$username = stripcslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($conn, $username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn, $password);
		$query = "SELECT * FROM `users` WHERE username = '$username' and password ='".md5($password)."'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result)!=1){
			echo '<script type="text/javascript">alert("Username hoặc password không chính xác")</script>';
			echo '<script type="text/javascript">window.location="/webblog/tk00/login.php"</script>';
			die();
		}else{
			$_SESSION['username'] = $username;
			echo $_SESSION['username'];
      		header("Location: index.php");
		}

	}
	?>
	<div class="container">
 
	<!-- Phần header website -->
	<?php include "layout/header.php"; ?>
	<!-- Kết thúc phần header website -->
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/background.jpg'); background-repeat: repeat;">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="post" action="">
						<span class="login100-form-title p-b-26">
							Welcome
						</span>
						<span class="login100-form-title p-b-48">
							<i class="zmdi zmdi-font"></i>
						</span>

						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="username">
							<span class="focus-input100" data-placeholder="Username"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="password">
							<span class="focus-input100" data-placeholder="Password"></span>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" name="submit">
									Login
								</button>
							</div>
						</div>

						<div class="text-center p-t-115">
							<span class="txt1">
								Don’t have an account?
							</span>

							<a class="txt2" href="register.php">
								Sign Up
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		

		<div id="dropDownSelect1"></div>
			<!-- Phần Footer -->
		<?php include "layout/footer.php"; ?>
		<!-- Kết thúc phần Footer -->
	</div>
<!--===============================================================================================-->
	<!-- <script src="vendor/login/vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/login/vendor/animsition/js/animsition.min.js"></script> -->
<!-- =============================================================================================== -->
	<!-- <script src="vendor/login/vendor/bootstrap/js/popper.js"></script> -->
	<!-- <script src="vendor/login/vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/login/vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/login/vendor/daterangepicker/moment.min.js"></script> -->
	<!-- <script src="vendor/login/vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/login/vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->
	<script src="js/login/main.js"></script>
</body>
</html>
