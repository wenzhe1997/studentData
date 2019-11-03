<?php
$host= "localhost";
$username= "root";
$password= "";
$dbname= "student";

$conn= new mysqli($host, $username, $password, $dbname);

//check connection
if($conn === false)
{
  die("Error: Could not connect. ". $conn->connect_error);
}


?>