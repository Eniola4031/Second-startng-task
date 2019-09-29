<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "newsalert";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   

   /*Alternatively to connecting is database to php 
   $dbhost ="localhost";
   $bduser = "root";
   $dbpass = "";

   mysqli ($dbhost, $dbuser, $dbpass, $db) or die("cannot connect to database");

echo 'connection sucess';




   */
?>

