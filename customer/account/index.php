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
// continue the session
//session_start();

include_once('database.inc');   


   //$data = mysql_query("SELECT * FROM Customer ");   

   //show results   
  // while($result = mysql_fetch_array( $data ))   
  // {   
   //echo "<h2>Shirt-Name:</h2>"; echo " ";   echo " ";  
echo "<h2>UserID : $_SESSION[uid]</h2>";   

echo "<h2> Welcome : $_SESSION[name]</h2>";  

echo "<h2>Email ID : $_SESSION[email]</h2>";   
      echo "<br>";   
    
//echo $result['link'];
      //$image = mysql_fetch_assoc($data);
   //   $image = $image['image'];

  // header("Content-type: image/jpeg");
  // echo $image;
      //echo $result['Shirt_Image'];    
      echo "<br>";    
      echo "<br>";   
  // }   

   //counts results. ifnone. error    
  //$anymatches=mysql_num_rows($data);    
      
     
 ?>



<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/project/footer.inc');
?>

