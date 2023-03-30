<!DOCTYPE html>
<html lang="en">
<head>
	<title>Driver login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/drlogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/drlogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/drlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/drlogin/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/drlogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/drlogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/drlogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/drlogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/drlogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/drlogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/drlogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
include("dbcon.php");
?>
	<form action="driverlogin_action.php" method="post" >
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Welcome Driver
					</span>
					<span class="login100-form-title p-b-48">
						<!-- <i class="zmdi zmdi-font"></i> -->
					</span>

					<div class="wrap-input100 validate-input"  data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="txt_name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
						<span class="focus-input100" data-placeholder="Email"  ></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="txt_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"data-validate="Enter password">
						<span class="focus-input100" data-placeholder="Password"> </span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" value="Login">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="driverreg.php">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/drlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/drlogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/drlogin/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/drlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/drlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/drlogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/drlogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/drlogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/drlogin/js/main.js"></script>
    </form>
</body>
</html>