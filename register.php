<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM tbl_login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }elseif($_SERVER["REQUEST_METHOD"] == "POST"){

	 // User Registration form 
      
	//  if($_SERVER["REQUEST_METHOD"] == "POST") {
		$myfirstname = mysqli_real_escape_string($db,$_POST['firstname']);
		 $mylastname  = mysqli_real_escape_string($db,$_POST['lastname']);
		 $myusername  = mysqli_real_escape_string($db,$_POST['username']);
		 $mypassword  = mysqli_real_escape_string($db,$_POST['password']); 
		 $myemail = mysqli_real_escape_string($db,$_POST['email']); 
	
	
		 $sql = "INSERT into `tbl_login` (Firstname, Lastname, username, password,email)
		 VALUES ('$myfirstname', '($mylastname)', '$myusername', '$mypassword', '$myemail')";
		 $result = mysqli_query($db,$sql);
	//    }

   }	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		  <div class="navbar-header">
			<a class="navbar-brand" href="#">Please Enter Your Nav Bar Here</a>
		  </div>
		 
	  </nav>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form id="form_2" action = "" method = "post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text"name = "firstname" placeholder="First Name" />
			<input type="text" name = "lastname" placeholder="Last Name" />
			<input type="text" name = "username" placeholder="UserName" />
			<input type="password" name = "password" placeholder="Password" />
			<input type="email" name = "email" placeholder="email" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form id="form_1" action = "" method = "post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" name = "username" placeholder="Email" />
			<input type="password" name = "password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>