<?php
  // 1. Create a database connection

   $servername = "localhost";
   $username = "root";
   $password = "ganesh";
   $dbname = "studentaccomodation";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname); 

   function makeconnection()
  {

    $conn=mysqli_connect("localhost","root","ganesh","studentaccomodation");
	if (mysqli_connect_errno())
    {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
   return $conn;
  }   
  
  
?>