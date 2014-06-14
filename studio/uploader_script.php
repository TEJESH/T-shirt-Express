<?php
/* 
                        Script Written By: Adam Khoury @ 
*/
// Set local PHP vars from the POST vars sent from flash
$todayDate = $_POST['todayDate'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$filename = $_FILES['Filedata']['name'];	
$filetmpname = $_FILES['Filedata']['tmp_name'];	
$fileType = $_FILES["Filedata"]["type"];
$fileSizeMB = ($_FILES["Filedata"]["size"] / 1024 / 1000);

// Place file on server, into the images folder
move_uploaded_file($_FILES['Filedata']['tmp_name'], "images/".$filename);

// This section edits your log file, if you don't need a text log file just delete these lines
$myFile = "logFile.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "\n\ntodayDate: $todayDate  \n Name: $Name \n Email: $Email \n ssid: $ssid \n FileName: $filename \n TmpName: $filetmpname \n Type: $fileType \n Size: $fileSizeMB MegaBytes";
fwrite($fh, $stringData);
fclose($fh);
// End log file edit

?>