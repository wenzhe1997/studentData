<?php
include 'config.php';
include 'link.php';
session_start();

$name=$_POST['name'];
$password=$_POST['password'];

$sql="SELECT * FROM admin WHERE name='$name'and password='$password'";

$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$count=mysqli_num_rows($result);

if($count == 1)
{
	 $_SESSION['name']=$row['name'];

	echo "<script> alert('Login Successfully!')</script>";
	echo "<script>window.location='fetchStudent.php';</script>";
	
}
else
{
	echo "<script> alert('Login Failed!')</script>";
	echo "<script>window.location='login.php';</script>";
}
?>