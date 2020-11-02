<html lang="en">
<head>
	<title>Registration</title>
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
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">First Name</span>
						<input id="name" class="input100" type="text" name="name" placeholder="Name... " id="name">
						<span class="focus-input100"></span>
						<span id="nameerror" class="text-danger font-weight-bold"> </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input id="email" class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
						<span id="emailerror" class="text-danger font-weight-bold"> </span> </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid no. is required">
						<span class="label-input100">Mobile number</span>
						<input id="mobile"  class="input100" type="text" name="mobile" placeholder="+91 included alredy">
						<span class="focus-input100"></span>
						<span id="mobileerror" class="text-danger font-weight-bold"> </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input id="username" class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
						<span id="usernameerror" class="text-danger font-weight-bold"> </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span> 
						<input id="pass" class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
						
						<span id="passerror" class="text-danger font-weight-bold"> </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input id="rp_pass" class="input100" type="password" name="cpassword" placeholder="*************">
						
						<span class="focus-input100"></span>
						
						<span id="rp_passerror" class="text-danger font-weight-bold"> </span>
					</div>

				

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								Sign Up
							</button>
						</div>
						
						<a href="index.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Log in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>

						
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">

  function validation()
  {
  	 var fname = document.getElementById('name').value;
     var username = document.getElementById('username').value;
     var mobile = document.getElementById('mobile').value;
     var email = document.getElementById('email').value;
     var password = document.getElementById('pass').value;
     var cpassword = document.getElementById('rp_pass').value;


     var namecheck = /^[A-Z]{1}[a-z]{3,30}$/ ;
     var usercheck = /^[A-za-z0-9_-]{3,10}$/ ;
     var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,16}$/ ;
     var emailcheck = /^[A-Za-z0-9_.]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/ ;
     var mobilecheck = /^[789]{1}[0-9]{9}$/ ;

     
     if(namecheck.test(fname)){
      document.getElementById('nameerror').innerHTML = " ";
     }
     else{
      document.getElementById('nameerror').innerHTML = "* First name is not valid  ";
      return false;
     }


     if(emailcheck.test(email)){
      document.getElementById('emailerror').innerHTML = " ";
     }
     else{
      document.getElementById('emailerror').innerHTML = "* Email-id is not valid  ";
      return false;
     }

      if(mobilecheck.test(mobile)){
      document.getElementById('mobileerror').innerHTML = " ";
     }
     else{
      document.getElementById('mobileerror').innerHTML = "* mobile number is not valid  ";
      return false;
     }

      if(usercheck.test(username)){
      document.getElementById('usernameerror').innerHTML = " ";
     }
     else{
      document.getElementById('usernameerror').innerHTML = "* username is not valid  ";
      return false;
     }


     if(passwordcheck.test(password)){
      document.getElementById('passerror').innerHTML = " ";
     }
     else{
      document.getElementById('passerror').innerHTML = "* password must include atleast one number, letter and a special character  ";
      return false;
     }

     if(password === cpassword)
     {
      document.getElementById('rp_passerror').innerHTML = "";
     }
     else{
      document.getElementById('rp_passerror').innerHTML = "* password is not matching  ";
      return false;
     }


  }



</script>
	


</body>
</html>



<?php 
include 'dbconn.php';

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile_no = $_POST['mobile'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	$pass = password_hash($password, PASSWORD_BCRYPT);



	$emailquery =  "select * from user where email= '$email'";
	$equery = mysqli_query($con,$emailquery);
	$emailcount = mysqli_num_rows($equery);

	$usernamequery = "select * from user where username= '$username'";
	$uquery = mysqli_query($con,$usernamequery);
	$usercount = mysqli_num_rows($uquery);



	if($emailcount>0 or usercount>0){


 	?>
 	<script>alert('This user is already exists');</script>
 	<?php 

	}else{


	$insertquery = " insert into user(fname, email, mobile, username, password) values('$name', '$email', '$mobile_no', '$username', '$pass') ";
	$iquery = mysqli_query($con, $insertquery);



	$infoquery = "insert into info(username) values ('$username')";
	$inquery = mysqli_query($con, $infoquery);


		if($iquery and $inquery){
	

 	?>
 	<script>alert('Registered successfully');
 	location.replace("index.php");
 	</script>

 	<?php
		require 'PHPMailerAutoload.php';
		require 'credential.php';

		$mail = new PHPMailer;

		$mail->SMTPDebug = 4;                              

		$mail->isSMTP();                                      
		$mail->Host = 'smtp.gmail.com';  
		$mail->SMTPAuth = true;                               
		$mail->Username = EMAIL;                 
		$mail->Password = PASS;                           
		$mail->SMTPSecure = 'tls';                            
		$mail->Port = 587;                                    

		$mail->setFrom(EMAIL, 'Quarantine and Fun');
		$mail->addAddress($email);     // Add a recipient
		

		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Welcome to QandF !';
		$mail->Body    = 'We are very happy to have you <b>with us.</b><br> Your username is: '.$username.'<br>Your passrord is: '.$password;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		}
		?>
 	<?php 

		}else{
	?>
 	<script>alert('Registration unsuccessful');</script>
 	<?php
}

}

 
	
}

?>



	

	





