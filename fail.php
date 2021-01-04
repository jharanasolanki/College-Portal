<!DOCTYPE html>
<html lang="en">
<head>

	<title>Login V16</title>
	<style>
	

		@font-face {
font-family: "Flaticon1";
src: url("flaticon1.eot");
src: url("flaticon1.eot#iefix") format("embedded-opentype"),
url("flaticon1.woff") format("woff"),
url("flaticon1.ttf") format("truetype"),
url("flaticon1.svg") format("svg");
font-weight: normal
font-style: normal;
}
		input[type=submit] {
			 width: 50%;
			 height: 60%;
  background-color: #032246;
  color:#fec63c;
  padding: 12px 20px;
  margin: 8px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #fec63c;
  color:#032246;
}

	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/books_background.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<div class="bg-color">
				<span class="login100-form-title p-b-41">
					Check your password again<br>
					<font color="#fec63c">
					Account Login
				</font>
				</span>
			</div>

				<form class="login100-form validate-form p-b-33 p-t-5" action="NewPasswordEntry.php" method="post">

					<div class="wrap-input100 validate-input" data-validate="NewPassword">
						<input class="input100" type="password" name="NewPassword" placeholder="Enter New Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>				
					<div class="wrap-input100 validate-input" data-validate="ConfirmPassword">
						<input class="input100" type="password" name="ConfirmPassword" placeholder="ConfirmPassword">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>		<!--<div class="wrap-input100 validate-input" data-validate="OTP">
						<input class="input100" type="number" name="OTP" placeholder="OTP">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>-->

					<div class="container-login100-form-btn m-t-32">
						<input type="submit" value="Submit" style="font-size:20px; font-family:Flaticon1">
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	

</body>
</html>