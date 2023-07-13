<link rel="stylesheet" type="text/css" href="../css/head_foot_style.css">
<?php
if(isset($_SESSION["username"]))
    $loginButtonText = "USER " . $_SESSION['username'];
else
    $loginButtonText = "login";
?>


	<div id="header">
		<img src="../images/logo-image.PNG" alt="Webiste logo" height="125px" width="125px">
		<a href="#home"> <img src="../images/logo-name.PNG" alt="Webiste logo Name" height="125px"> </a>

		<a href="#user"> <img id="user" src="../images/profile-pic.PNG" alt="User Login Icon" height="80px" width="120px"></a><a href="#home">
	  <a href="../admin/adminlogin.php"> <input id="login"  class="button1" type="button" name="ad_login" value="ADMIN LOGIN"> </a>	
		
		<div id="search">
		<input type="search" name="search" value="search"> <input type="button" name="btn" value="SEARCH">
		</div>
	</div>

	<div class="nav">
  		<a href="../views/index.php" id="Homepage"> HOME </a>
  		<a href="../views/aboutUs.php" id="Aboutus"> ABOUT </a>
  		
  		<div class="dropdown">
    <button class="dropbtn"><b>APPOINTMANT</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
   	  <a href="vaccines.php" id="vaccines">Vaccination Details </a>
      <a href="Hospital.php" id="Hospitals">Hospital Details </a>
      <a href="appointment.php" id="appointment">Book Appointment</a>
      <a href="PaymentPortal.php" id="payment">Payment</a>
    </div>
   </div>
   
  		<a href="contactUs.php" id="contact"> CONTACT US </a>
  		<a href="login.php" id="Register"> REGISTER/LOGIN </a>
  		<a href="faq.php" id="contact"> FAQ </a>
	</div>