<?php 
require('database.inc');

$sql="INSERT INTO customer (FirstName,LastName,email,password)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[pwd]')";

if (!mysql_query($sql,$db))
  {
  die('Error: ' . mysql_error());
  }

echo "record added";

mysql_close($db);

	$email=$_POST['email'];
	echo $email;
	$query="select count(*) from user where email='".$_POST['email']."'";
	$result=mysql_query($query);
	//$r=mysql_fetch_assoc($result);
	if($result['count(*)']<1)
	{
		echo "successfull";
		
	}
	else
	{
		echo "already exist";
	}
?>
