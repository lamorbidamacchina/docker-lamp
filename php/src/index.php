<?php
// index.php
// Note: $host value should be the same defined in docker-compose.yml as services.db.container_name value.
$host = 'db';
$user = 'myuser';
$pass = 'mypass';
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {    
  die("Connection failed: " . $conn->connect_error);
  } 
else {   
  echo "Connected to MySQL server successfully!";
  }
?>
