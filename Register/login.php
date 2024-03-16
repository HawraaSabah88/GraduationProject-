<?php
 
   session_start();
   $conn =mysqli_connect("localhost","root","","info");
 


   if(isset($_POST['login'])){


	$id = $_POST['id'];

    $emailf = $_POST['emailf'];
    $psw = $_POST['psw'];

		
		$Sql="Select id from pinfo where psw='$psw'  && emailf='$emailf' ";
		if(mysqli_num_rows(mysqli_query($conn, $Sql)) > 0){

		$query_run1 = mysqli_query($conn, $Sql);
		foreach($query_run1 as $row)
		{
			$id=$row['id'];
		}
		header("Location: ../page_employee/staff_update.php?id=$id");}	   
    else {
        echo'حدث خطأ //الاسم او الباسورد خطأ';
		header("Location: ../page_employee/cr_staff.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
				<center>
					<img src="images/icons/nahrainLogo.jpg" alt="" width="90px" height="90px">
				</center>
				<br><br>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="email" name="emailf"data-validate="Enter Email"/>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="psw"/>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
                  
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn"name="login" type="submit">
								Log in
							</button>
						</div>
					</div>
				

					</form>
					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t Remember your account?
						</span>

						<a class="txt2" href="R_me.php">
							Remember me 
						</a>
					</div>
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
