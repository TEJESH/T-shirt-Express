<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
<?php

print date('F jS, Y');
include_once($_SERVER['DOCUMENT_ROOT'].'/project/header.inc');
?>




<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="/project/noob/_web.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/project/noob/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/project/noob/mootools-1.2-core.js"></script>
	<script type="text/javascript" src="/project/noob/_class.noobSlide.packed.js"></script>
<link rel="stylesheet" type="text/css" href="/project/css/style.css"/>
<link rel="stylesheet" type="text/css" href="styles.css">
  <!--link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=ABeeZee:400,400italic">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="formslider.js"></script-->
  
  
<style type="text/css" src="/project/css/style.css"> </style>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="noob/_web.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="noob/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="noob/mootools-1.2-core.js"></script>
	<script type="text/javascript" src="noob/_class.noobSlide.packed.js"></script>
<link rel="stylesheet" type="text/css" href="/project/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/project/customer/account/login/styles.css"/>  


<?php 
require('database.php');



echo $_SESSION['uid'];

$sessionid=$_SESSION['uid'];

$_SESSION['address']=$_POST['address'];	
$_SESSION['city']=$_POST['city'];	
$_SESSION['state']=$_POST['state'];	
$_SESSION['zip']=$_POST['zip'];

	
$sql="INSERT INTO Order_Details (UserID, EmailID, Receiver_Name, Address, City, Zip, State) 
VALUES ('$_SESSION[uid]','$_POST[email]', '$_POST[fname]', '$_POST[address]','$_POST[city]','$_POST[zip]','$_POST[state]')";

if (!mysql_query($sql,$db))
  {
  die('Error: ' . mysql_error());
  }
else
{
//header('Location:/project/checkout/bill.php');
echo "<br> Your record has been added <br>";

}		

	
///mysql_close($db);
?>

<form id="checkout" name="checkout" action="bill.php" method="post">
  <input type="submit" name="registerbtn" id="registerbtn" value="Get your Bill" class="btn" tabindex="9">
</form>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?>
