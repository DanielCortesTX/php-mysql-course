
<?php
  // connection variable
  $con = mysqli_connect("localhost", "root", "", "social");

  if(mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_errno();
  }

  // Inserting into database
  $query = mysqli_query($con, "INSERT INTO test VALUES('', 'Daniel')");
?>

<DOCTYPE1 html>
<html>
  <head>
    <title>Php My sql course</title>
  </head>
  <body>
    Hello Daniel
  </body>
</html>