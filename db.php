<?php

   $conn=mysql_connect("localhost","","") ;
	// Check connection
    if (!$conn) 
	{
    die("Connection failed: " . $conn->connect_error);
       }
     echo "Connected successfully";

     mysql_select_db("faccount",$conn);
?>