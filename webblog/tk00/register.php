<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/register/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/register/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/register/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/register/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/register/util.css">
	<link rel="stylesheet" type="text/css" href="style/register/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	require('../public_html/mysqlconnect.php');
	 if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	    $username = stripslashes($_REQUEST['username']);
	    $username = mysqli_real_escape_string($conn,$username);
	    $fullname = stripcslashes($_REQUEST['fullname']);
	    $fullname = mysqli_real_escape_string($conn, $fullname);
	    $email = stripslashes($_REQUEST['email']);
	    $email = mysqli_real_escape_string($conn,$email);
	    $password = stripslashes($_REQUEST['password']);
	    $password = mysqli_real_escape_string($conn,$password);
	    $query = "SELECT * FROM `users` WHERE email = '$email' OR username='$username'";
	    $result = mysqli_query($conn,$query);

	    if(mysqli_num_rows($result)>0){
	    	echo '<script type="text/javascript">alert("Email hoặc username đã tồn tại")</script>';
	    	echo '<script type="text/javascript">window.location="/webblog/tk00/register.php"</script>';
	    	die();
	    }

	    $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, fullname, password, email, trn_date) VALUES ('$username', '$fullname', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo '<script type="text/javascript">window.location="/webblog/tk00/login.php"</script>';
        }else{
        	echo '<script type="text/javascript">alert("Đã có lỗi xảy ra")</script>';
        }
    }
	?>

<div class="container">
 
	<!-- Phần header website -->
	<?php include "layout/header.php"; ?>
	<!-- Kết thúc phần header website -->
 
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/background.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form name="myform" class="login100-form validate-form" method="post" action="" onsubmit="return validate()">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="fullname" id="fullname" placeholder="Full name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" id="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" id="password" type="text" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="text" name="repeat_password"id="repeat_password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								Sign up
							</button>
						</div>
						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Phần Footer -->
	<?php include "layout/footer.php"; ?>
	<!-- Kết thúc phần Footer -->
</div>

<script>
    function validate() {
        var password1 = document.myform.password.value;
        var password2 = document.myform.repeat_password.value;
        var status = false;
 
        if (password1.length < 6) {
            alert("Mật khẩu phải có độ dài trên 6 ký tự");
            status = false;
        } else {
            document.getElementById("password").innerHTML = ""
            status = true;
        }
        if (password1!=password2) {
            alert("Nhập lại mật khẩu không trùng với mật khẩu đã nhập");
            status = false;
        } else {
            document.getElementById("passwordloc").innerHTML = 
                "";
        }
        return status;
    }
</script>
	
<!--===============================================================================================-->
	<script src="vendor/register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/register/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/register/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/register/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/register/vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/register/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/register/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/register/main.js"></script>
	<script src="js/register/map-custon.js"></script>

</body>
</html>


