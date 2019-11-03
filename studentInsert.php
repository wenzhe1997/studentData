<?php
include 'config.php';


$name = $conn->real_escape_string($_REQUEST['name']);
$studentId = $conn->real_escape_string($_REQUEST['studentId']);
$phone = $conn->real_escape_string($_REQUEST['phone']);
$batch = $conn->real_escape_string($_REQUEST['batch']);
$email = $conn->real_escape_string($_REQUEST['email']);
$age = $conn->real_escape_string($_REQUEST['age']);
$gender = $conn->real_escape_string($_REQUEST['gender']);
$race = $conn->real_escape_string($_REQUEST['race']);
$religion = $conn->real_escape_string($_REQUEST['religion']);
$nationality = $conn->real_escape_string($_REQUEST['nationality']);


$sql = "INSERT INTO studentData(name, studentId, phone, batch, email, age, gender, race, religion, nationality) VALUES ('$name', '$studentId', '$phone', '$batch', '$email', '$age', '$gender', '$race', '$religion', '$nationality')";







if($conn->query($sql) === true)
{
	echo "<script>alert('Record inserted successfully')</script>";
	echo "<script>window.location='fetchStudent.php'</script>";

}
else{
	echo "Error: Could not able to execute $sql." .$conn->error;
}

$conn->close();

?>