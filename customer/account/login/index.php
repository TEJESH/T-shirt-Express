
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

  <div id="content-login">
	<h2>Login to the Site</h2>
	<div class="content">
	  <a href="/project/customer/account/register" class="slidelink" id="showregister">Don't Have An Account? </a>
	  
	 <form  id="login" name="login" action="login.php" method="post">
	  
		<label for="email">Email Address</label>
		<input type="email" name="email" id="email" class="txtfield" tabindex="1" autocomplete="on" >
 
		<label for="password">Password</label>
		<input type="password" name="password" id="password" class="txtfield" tabindex="2" autocomplete="off" >
 
		<input type="submit" name="loginbtn" id="loginbtn" value="Login" class="btn" onclick="" tabindex="3" >
	 </form>
 
	</div>
  </div><!-- /end #content-login -->
 
 

 
 
</div><!-- /end #page -->
</div><!-- /end #w -->


<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?>
