# A shortcut page to open a connection in the database

<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$database="DBName";

    //create connection
   $connection = mysqli_connect($servername,$username,$password,$database);
   
   //Check connection
   if(!$connection)
   {
       die('Connect Failled:' . mysqli_connect_error());
   }
?>
