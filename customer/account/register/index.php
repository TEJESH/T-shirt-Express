
<?php
print date('F jS, Y');
include_once($_SERVER['DOCUMENT_ROOT'].'/project/header.inc');
?>
<title>Login</title>

<link rel="stylesheet" type="text/css" href="/project/customer/account/login/styles.css"/>
<!--link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=ABeeZee:400,400italic">
<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="formslider.js"></script-->




<div id="w">
<h1></h1>
 
<div id="page">

 
 
  <div id="content-register">
	<h2>Register a New Account</h2>
	<div class="content">

	<a href="/project/customer/account/login" class="leftsidelink" id="showlogin"><- Already Have an Account? Login Now!</a>
	
	<form id="register" name="register" action="register.php" method="post">
	  <label for="fname">First Name</label>
	  <input type="text" name="fname" id="fname" class="txtfield" tabindex="4" autocomplete="off">
 
	  <label for="lname">Last Name</label>
	  <input type="text" name="lname" id="lname" class="txtfield" tabindex="5" autocomplete="off">
 
	  <label for="newemail">Email Address</label>
	  <input type="email" name="newemail" id="newemail" class="txtfield" tabindex="6" autocomplete="off">
 
	  <label for="password1">Password</label>
	  <input type="password" name="password1" id="password1" class="txtfield" tabindex="7" autocomplete="off">
 
	  <label for="password2">Confirm Password</label>
	  <input type="password" name="password2" id="password2" class="txtfield" tabindex="8" autocomplete="off">
 
	  <input type="submit" name="registerbtn" id="registerbtn" value="Sign Up" class="btn" tabindex="9">
</form>
	</div>
  </div><!-- /end #content-register -->
 
 
</div><!-- /end #page -->
</div><!-- /end #w -->


<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?>
