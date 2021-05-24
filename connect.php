<?php
  // Yung database lang babaguhin nyo dito
  $server = "us-cdbr-east-03.cleardb.com";
  $username = "b2fcadf0dbd754";
  $password = "c261000a"; // kung wala kayong sinet na pw, leave this as it is 
  $database = "heroku_54f5e8ef0cc9865"; // ilagay kung ano yung database name nyo

  // eto yung magtatry na magconnect ng database nyo sa file nyo, yung pagkakasunod sunod nung nasa parenthesis dapat di mabago
  $conn = mysqli_connect($server, $username, $password, $database);

  // eto naman yung magdidisplay ng error pag di nagconnect yung database nyo sa file
  if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }
?>
