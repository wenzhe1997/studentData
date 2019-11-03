<?php

include 'link.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>LoginPage</title>
  <style>
    * {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("photo/mhexplorer.jpg");
    
    


    min-height: 900px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Add styles to the form container */
.container {
    position: absolute;
    left: 0;
    margin: 70px;
    max-width: 500px;
    padding: 60px;
    background-color: #b3ecff;
    border-radius:20px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #303030;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
  </style>
</head>
<body>
<div class="bg-img">
  <form action="checklogin.php" method="post">
    <div class="container">

<h1 style="color:#303030">Student Modoules</h1>
<br>
<br>
      <h1>Login <i class="fas fa-sign-in-alt"></i></h1>
      <br>
      <br>

      <label for="name"><b><i class="fas fa-user"></i> Name</b></label>
      <input type="text" placeholder="Enter name" name="name" required>

      <label for="password"><b><i class="fas fa-unlock-alt"></i> Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="btn">Login</button>
    </div>
  </form>
</div>
</body>
</html>