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
  <!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="formslider.js"></script-->
  
  
<style type="text/css" src="/project/css/style.css"> </style>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="noob/_web.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="noob/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="noob/mootools-1.2-core.js"></script>
	<script type="text/javascript" src="noob/_class.noobSlide.packed.js"></script>
<link rel="stylesheet" type="text/css" href="/project/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/project/customer/account/login/styles.css"/> 


<link rel="stylesheet" href="style.css">





</br></br></br></br>


<img src="images/5.jpg">


<div id="container1">

<?php
include_once('database.php');
$query = "Select InventoryID ,  Shirt_Name, Shirt_Company, Nr_Shirts , Price from Shirts where InventoryID=5";
	 $result = mysql_query($query);
	 $num_rows = mysql_num_rows($result);
         $row=mysql_fetch_array($result);
	 //$num_rows = $result->num_rows;
	 if($num_rows > 0)	
	 {
	    echo"InventoryID-"; echo" ";    echo $row['InventoryID'];
echo"<br>";
echo"Shirt_Name-"; echo" "; echo $row['Shirt_Name'];
echo"<br>";
echo"Shirt_Company-"; echo" "; echo $row['Shirt_Company'];
echo"<br>";
echo"Number of Shirts-"; echo" "; echo $row['Nr_Shirts'];
echo"<br>";
echo"Price of Shirt-"; echo" "; echo $row['Price']; echo"Rs.";
echo"<br>";
$_SESSION['sid']=$row['InventoryID'];
$_SESSION['sname']=$row['Shirt_Name'];
$_SESSION['price']=$row['Price'];
	 }
	 else
	 {
		echo "false";	
	 }

?>


</div>



<form action="/project/checkout" method="post"
enctype="multipart/form-data">
<input type="submit" name="Submit" value="Add to Cart" class="btn1" />

</form>


</br></br></br></br>











<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?>
