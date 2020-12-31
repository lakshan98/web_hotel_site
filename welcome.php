<?php
   include("config.php");
   session_start();
	

if($_SERVER["REQUEST_METHOD"] == "POST") {

		$first_name = mysqli_real_escape_string($db,$_POST['first_name']);
		 $last_name  = mysqli_real_escape_string($db,$_POST['last_name']);
		 $email  = mysqli_real_escape_string($db,$_POST['email']);
		 $roomtype  = mysqli_real_escape_string($db,$_POST['roomtype']); 
		 $NumberofGuests = mysqli_real_escape_string($db,$_POST['NumberofGuests']); 
         $ArrivalDateTime = mysqli_real_escape_string($db,$_POST['ArrivalDateTime']); 

	
		 $sql = "INSERT into `tbl_booking` (firstName, lastName, email, roomtype, Guests,ArrivalDateTime)
		 VALUES ('$first_name', '$last_name', '$email', '$roomtype', '$NumberofGuests', '$ArrivalDateTime')";
		 $result = mysqli_query($db,$sql);
       echo '<script>alert("Thanks for Booking ")</script>';
      //  header("location: bookingdetails.php");
	}	

?>
<html">
   
   <head>
      <title>White House Hotel</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
      <link href="css\default.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css\fonts.css" rel="stylesheet" type="text/css" media="all" />
   </head>

<body>
<div id="main">
	<div id="head">
		<div id="header" class="next">
			<div id="logo">
				<h1><a href="index.html">White House Hotel</a></h1>
			</div>
		</div>
		<div id="menu" class="next">
			<ul>
				<li class="main_menu"><a href="home.html" accesskey="1" title="">Home</a></li>
				<li><a href="welcome.php" accesskey="1" title="">Booking</a></li>
				<li><a href="Multiple.html" accesskey="2" title="">Multiple hotel</a></li>
				<li><a href="index.php" accesskey="3" title="">Registration</a></li>
				<li><a href="about.html" accesskey="4" title="">About Us</a></li>
				<li><a href="Contact.html" accesskey="5" title="">Contact us</a></li>
			</ul>
		</div>
	</div>

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<legend>Welcome to Booking Page!</legend>
<form id="form_2" action = "" method = "post">


<div class="form-group">
<label class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>


   <div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
</div>
</div>
</div>



<div class="form-group"> 
<label class="col-md-4 control-label">Room Type</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="roomtype" class="form-control selectpicker" >
  <option value=" " >Please select your</option>
  <option> Single</option>
  <option>Double</option>
  <option >Triple</option>
  <option > Quad</option>
  <option > Queen</option>
  <option > King</option>
  <option >Twin</option>
  <option >Hollywood Twin Room</option>
  <option >Double-double</option>
  <option >Studio</option>
  <option >Suite / Executive Suite</option>
  <option >Mini Suite or Junior Suite</option>
  <option >President Suite | Presidential Suite</option>
  <option >Apartments / Room for Extended Stay</option>
  <option >Connecting rooms</option>
  <option > Murphy Room</option>
  <option >Accessible Room / Disabled Room</option>

</select>
</div>
</div>
</div>



<div class="form-group"> 
<label class="col-md-4 control-label">Number of Guests</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon "></i></span>
    <input type="number" class="form-control" name="NumberofGuests" min="1" max="10">
</div>
</div>
</div>

<div class="form-group"> 
<label class="col-md-4 control-label">Arrival Date & Time</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon "></i></span>
    <input type="datetime-local" class="form-control" name="ArrivalDateTime" min="1" max="10">
</div>
</div>
</div>


<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for Booking.</div>


<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button type="submit" class="btn btn-warning" id="Submit" >Booking <span class="glyphicon glyphicon-send"></span></button>
</div>
</div>
</form>
</fieldset>
</form>
</div>
</div>

   </body>
   
</html>