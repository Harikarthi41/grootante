<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "dbuser";
 $dbpass = "dbpass";
 $db = "file upload";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>