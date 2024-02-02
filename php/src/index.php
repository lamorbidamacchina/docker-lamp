<?php
// index.php
// Note: $host value should be the same defined as services.db.container_name in docker-compose.yml file
$host = 'db';
$user = 'myuser';
$pass = 'mypass';
$db_name = 'db';
$conn = new mysqli($host, $user, $pass, $db_name);
if ($conn->connect_error) {    
  die("Connection failed: " . $conn->connect_error);
  } 
else {   
  echo "Connected to MySQL server successfully!";
  }

$conn->close();
?>


