<?php
session_start();
if( !empty($_SESSION['logged_in']) )
{
	echo $_SESSION['uid'];
    ?>

   
    <!--a href='/project/customer/account/logout/'>Click here to log out</a><-->


    <?php
}
else
{
  print "You are not logged in. <--a href='/project/customer/account/login/'>Click here</a><--> to log in.";


}
?>