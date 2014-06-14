<HTML>
<HEAD>
<TITLE>Project</TITLE>
</HEAD>


<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="/project/noob/_web.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/project/noob/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="/project/noob/mootools-1.2-core.js"></script>
<script type="text/javascript" src="/project/noob/_class.noobSlide.packed.js"></script>
<link rel="stylesheet" type="text/css" href="/project/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/project/noob/styles.css">

  

<?php
session_start();
if( !empty($_SESSION['logged_in']) )
{
	echo "UserID: "; echo $_SESSION['uid']; echo "<br>";
echo "Welcome : $_SESSION[name]"; 
    ?>

   
    <!--a href='/project/customer/account/logout/'>Click here to log out</a><-->


    <?php
}
else
{
  //print "You are not logged in. <--a href='/project/customer/account/login/'>Click here</a><--> to log in.";


}
?>




<BODY>

<div> 
<p>

<a href="/project"> <img src="/project/logo.jpg" alt="image " width="150" height="100"> </a>

&nbsp;


<a href="#">Blogger </a>&nbsp;
    <a href="#">Twitter</a>
    &nbsp;
    <a href="#">Facebook</a>
    &nbsp;
    &nbsp;
    
<?
for($i=1; $i<100;$i++)
{
echo " &nbsp;";
}
?>
   <a class="top-link-cart" href="#"> 
    <span class="label">Shopping Cart:</span></a> 
    <?
if (!empty($_SESSION['logged_in']))    
{
?>       

<a class="lower-link" href="/project/customer/account/logout/" title="Login">Logout</a>
<?
}

else
{
?>
<a class="lower-link" href="/project/customer/account/login/" title="Login">Login</a>
<?
}
?>


&nbsp;
<a class="lower-link" href="/project/customer/account/" title="My Account">My Account</a>
&nbsp;
<a class="lower-link" href="/project/customer-service/" title="Customer Service">Customer Service</a>
&nbsp;
<a class="lower-link" href="/project/wishlist/" title="Wishlist">Wishlist</a>
&nbsp;

</p>





</br>
</br>
<p>
<!--form action="" method=""-->
<a href="/project/studio1">Design Your Own Shirt</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="/project/shirts">Open All Shirts</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?
for($i=1; $i<120;$i++)
{
echo " &nbsp;";
}
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div>

<!--input type="text" name="Search" value="Search" class="txtfield1"  /-->

<!--input type="submit" name="Submit" value="Submit" class="btn1" /-->

<!--/form-->

<div id="search">  

<form name="search" method="post" action="/project/catalogsearch/">  
<?
for($i=1; $i<175;$i++)
{
echo "&nbsp;";
}
?>
<input type="text" name="find" placeholder="search?" class ="txtfield1"/> in   
<Select NAME="field">  
<Option VALUE="Shirt_Name">Shirt_Name</option>  
<Option VALUE="Shirt_Company">Shirt_Company</option>  
<Option VALUE="type">Type</option>  
</Select>  

<input type="hidden" name="searching" value="yes" />  
<input type="submit" name="search" value="Search" class="btn1" />  
</form>  
</div> 

</div>
</p>


