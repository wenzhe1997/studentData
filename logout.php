<?php
session_start();
if(session_destroy())
{
	echo "<script> alert('Successful Logout!')</script>";
	echo "<script>window.location='login.php';</script>";
}

?>