<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>




<?
session_start();
require('database.inc');
  $email=$_POST['email'];
	 echo $email;
	 $query = "Select Email_Address , Password, UserID, First_Name, Last_Name from Customer where Email_Address='".$_POST['email']."' and Password='".$_POST['password']."'";
	 $result = mysql_query($query);
	 $num_rows = mysql_num_rows($result);
	 //$num_rows = $result->num_rows;
	 if($num_rows > 0)	
	 {
	    	$_SESSION['logged_in'] = true;
		 echo "if_working";
		 $row = mysql_fetch_assoc($result);
		 $_SESSION['uid']=$row['UserID'];
 		 $_SESSION['name']=$row['First_Name'];
                 $_SESSION['email']=$row['Email_Address'];
		 if($row['Usertype']==admin)
		 {
			 header('Location:?');
		 }
		 else
		 {
		 header('Location:/project/customer/account/');
		 }
	 }
	 else
	 {
		 echo "InCorrect Credential";
	 }
?>



