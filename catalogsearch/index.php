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
  
<hr>
<a href="/project">Go Back</a> 

 </div>

<div class="sample">

<?php  

include_once('database.inc');   

//$searching = "searching";  
//$find = "find";  
//$field = "field";

//$searching = mysql_real_escape_string($_POST['searching']); // sanitized just to be consistant.  
//$find = mysql_real_escape_string($_POST['find']);  
//$field = mysql_real_escape_string($_POST['field']);

//if (isset($_POST['search'])) {
//$searching = mysql_real_escape_string($_POST['searching']); // sanitized just to be consistant.  
//$find = mysql_real_escape_string($_POST['find']);  
//$field = mysql_real_escape_string($_POST['field']);
//}

if (isset($_POST['search'])) {  // checks to see if the form submit button was pushed
$searching = isset($_POST['search']) ? mysql_real_escape_string($_POST['searching']) : 'no'; // sanitized just to be consistant.  
$find = isset($_POST['find']) ? mysql_real_escape_string($_POST['find']) : '';  
$field = isset($_POST['field']) ? mysql_real_escape_string($_POST['field']) : '';
}

 //this is to make sure the user entered content  

if ($searching =="yes")   
{   
   echo "<p><h2>Results</h2></p>";   

   //if user did not enter anything in the search box, give error   
   if ($find == "")   
   {   
      echo "<p>You forgot to enter a search term</p>";   
   }   

   
   // strip whitespace, non case sensitive  
   $find = strtoupper($find);   
   $find = strip_tags($find);   
   $find = trim ($find);   

   //perform search in specified field  
   $data = mysql_query("SELECT * FROM Shirts WHERE upper($field) LIKE'%$find%'");   

   //show results   
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

   //counts results. ifnone. error    
  $anymatches=mysql_num_rows($data);    
   if ($anymatches == 0)    
   {    
      echo "Sorry, but we can not find an entry to match your query<br><br>";    
   }    

   //show user what he searched.   
   echo "<b>Searched For:</b> " .$find;     
 }     
 ?>     


 <?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?>
