<?php
// index.php
// Il nome del servizio definito in >docker-compose.yml.

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
