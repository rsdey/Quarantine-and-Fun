<?php 

session_start();

 ?>
<html lang="en">
<head>
	<title>QandF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="website/images/logo.png">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body style="background-color: #999999;">


	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onsubmit="return validation()" method="POST" >		<span class="login100-form-title p-b-59">
						Welcome to QandF !
					</span>
					<span class="login100-form-title p-b-59">
						Log in
					</span>

				

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input id="email" class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
						<span id="emailerror" class="text-danger font-weight-bold"> </span> </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span> 
						<input id="pass" class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
						
						<span id="passerror" class="text-danger font-weight-bold"> </span>
					</div>

				

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								Login
							</button>
						</div></div><br>Don't have an account?<br>
						<div class="container-login100-form-btn">
						<a href="signup.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign Up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">

  function validation()
  {
  	 
     var email = document.getElementById('email').value;




     var emailcheck = /^[A-Za-z0-9_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/ ;


     


     if(emailcheck.test(email)){
      document.getElementById('emailerror').innerHTML = " ";
     }
     else{
      document.getElementById('emailerror').innerHTML = "* Email-id is not valid  ";
      return false;
     }

     

  }



</script>
	


</body>
</html>



<?php 
	include 'dbconn.php';

	if(isset($_POST['submit'])){
		
		$email = $_POST['email'];
		
		$password = $_POST['password'];

		$email_search = "select * from user where email = '$email'";
		$aemail_search = "select * from admin where email = '$email'";
		$equery = mysqli_query($con, $email_search);
		$aequery = mysqli_query($con, $aemail_search);

		$email_count = mysqli_num_rows($equery);
		$aemail_count = mysqli_num_rows($aequery);


		if ($email_count) {
			$email_pass = mysqli_fetch_assoc($equery);
			$db_pass = $email_pass['password'];

			$_SESSION['username'] = $email_pass['username'];
			$_SESSION['id'] = $email_pass['id'];

			

			$pass_decoded = password_verify($password, $db_pass);

			if($pass_decoded){
				if ($aemail_count) {

					?>
 				<script>alert('Login Successful !');
 				location.replace("admin/home.php");
 				</script>
 				
 				<?php
					

				}


 				?>
 				<script>alert('Login Successful !');
 				location.replace("website/home.php");
 				</script>
 				
 				<?php

 			}else{

 			

 				?>

 					<script>document.getElementById('passerror').innerHTML = "* Incorrect password  ";</script>
 					<?php

 				}

 		}else{


 			?>

 					<script>document.getElementById('emailerror').innerHTML = "* No account with this email ";</script>
 					<?php

 				}

 			


		
		
	}

?>



	

	





