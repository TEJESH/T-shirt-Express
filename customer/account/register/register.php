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
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=ABeeZee:400,400italic">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="formslider.js"></script>
  
  
<style type="text/css" src="/project/css/style.css"> </style>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="noob/_web.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="noob/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="noob/mootools-1.2-core.js"></script>
	<script type="text/javascript" src="noob/_class.noobSlide.packed.js"></script>
<link rel="stylesheet" type="text/css" href="/project/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/project/customer/account/login/styles.css"/>  





<?php 
require('database.inc');





	$email=$_POST['newemail'];
	echo $email;
	$query="select count(*) from Customer where Email_Address='".$_POST['newemail']."'";
	$result=mysql_query($query);
	$r=mysql_fetch_assoc($result);
	if($r['count(*)']<1)
	{
		$sql="INSERT INTO Customer (First_Name,Last_Name,Email_Address,Password)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[newemail]','$_POST[password1]')";

if (!mysql_query($sql,$db))
  {
  die('Error: ' . mysql_error());
  }

echo "record added";
		
	}
	else
	{
		echo "already exist";
	}
///mysql_close($db);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?>
