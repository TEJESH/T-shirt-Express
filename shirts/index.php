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

<?php
include_once('database.php');
$query = "Select InventoryID ,  Shirt_Name, Shirt_Company, Nr_Shirts , Price, link from Shirts";

$data = mysql_query($query);
	 $num_rows = mysql_num_rows($data);
        //$row=mysql_fetch_array($result)
while($result = mysql_fetch_array( $data ))   
   {   
   //echo "<h2>Shirt-Name:</h2>"; echo " ";   echo " ";  
   echo "<h2><a href='$result[link]'>$result[Shirt_Name]</a></h2>";   
      echo "<br>";   
     echo "Shirt Company:"; echo " ";  echo $result['Shirt_Company'];    
      echo "<br>";  
       echo "No. of Shirts Available:"; echo " "; echo $result['Nr_Shirts'];
echo "<br>";
echo "Price:"; echo " "; echo $result['Price'];
//echo $result['link'];
      //$image = mysql_fetch_assoc($data);
   //   $image = $image['image'];

  // header("Content-type: image/jpeg");
  // echo $image;
      //echo $result['Shirt_Image'];    
      echo "<br>";    
      echo "<br>";   
   }   
//function writeName($fname,$punctuation)
//{
///echo $fname . " Refsnes" . $punctuation . "<br>";
//}

//echo "My name is ";
//writeName("Kai Jim",".");
//echo "My sister's name is ";
//writeName("Hege","!");
//echo "My brother's name is ";
//writeName("Ståle","?");
?>








<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?> 
