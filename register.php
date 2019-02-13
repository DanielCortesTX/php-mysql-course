<?php
  // connection variable
  $con = mysqli_connect("localhost", "root", "", "social");

  if(mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_errno();
  }

  //Declaring variables to prevent errors
  $fname = "";
  $lname = "";
  $em = "";
  $em2 = "";
  $password = "";
  $password2 = "";
  $date = "";
  $error_array = "";

  // If register button is pressed, start form handling 
  if(isset($_POST['register_button'])){
    // Registration form values
    // strip tags means take away html tags
    $fname = strip_tags($_POST['reg_fname']);
    // take fname, find space and replace it will nothing
    $fname = str_replace(' ', '', $fname);
    // take fname variable, make all letters lowercase, capitalize first letter
    $fname = ucfirst(strtolower($fname));

    $lname = strip_tags($_POST['reg_lname']);
    // take $lname, find space and replace it will nothing
    $lname = str_replace(' ', '', $lname);
    // take $lname variable, make all letters lowercase, capitalize first letter
    $lname = ucfirst(strtolower($lname));

    $em = strip_tags($_POST['reg_em']);
    // take em, find space and replace it will nothing
    $em = str_replace(' ', '', $em);
    // take em variable, make all letters lowercase, capitalize first letter
    $em = ucfirst(strtolower($em));

    $em2 = strip_tags($_POST['reg_em2']);
    // take em2, find space and replace it will nothing
    $em2 = str_replace(' ', '', $em2);
    // take em2 variable, make all letters lowercase, capitalize first letter
    $em2 = ucfirst(strtolower($em2));

    $password = strip_tags($_POST['reg_password']);
    // take password, find space and replace it will nothing
    $password = str_replace(' ', '', $password);
    // take password variable, make all letters lowercase, capitalize first letter
    $password = ucfirst(strtolower($password));

    $password = strip_tags($_POST['reg_password']);

    $password2 = strip_tags($_POST['reg_password2']);

    // Gets current date
    $date = date("Y-m-d");
    
  }
?>


<html>
<head>
  <title>
  Welcome to Swirlfeed
  </title>
</head>
<body>
<!-- action is the page that information will be sent to. -->
  <form action="register.php" method="POST">
    <input type="text" name="reg_fname" placeholder="first name" required>
    <br>
    <input type="text" name="reg_lname" placeholder="last name" required>
    <br>
    <input type="email" name="reg_email" placeholder="Email" required>
    <br>
    <input type="email" name="reg_email2" placeholder="Confirm Email" required>
    <br>
    <input type="password" name="reg_password" placeholder="Password" required>
    <br>
    <input type="password" name="reg_password2" placeholder="Confirm Password" required>
    <br>
    <input type="submit" name="register_button" value="Register">
  </form>
</body>
</html>