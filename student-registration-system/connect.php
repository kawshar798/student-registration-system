<?php 
  $db_hostname = "localhost";
  $db_username = "root";
   $db_password = "";
   $db_database = "test";

 $con =  new mysqli("$db_hostname","$db_username","$db_password","$db_database");

if(mysqli_connect_errno()){
    die("connection fail..");
}

?>