<?php

$server_name="localhost";

$username="root";

$password="";

$database_name="cafeteria_management_system";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)

{die("Connection Failed:" . mysqli_connect_error());}

 ?>

 

