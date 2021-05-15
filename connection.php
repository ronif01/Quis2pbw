<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_pweb";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
  # code...
  // echo "Connecton Open"; 
}
else
    echo "Connection failed";
  ?> 