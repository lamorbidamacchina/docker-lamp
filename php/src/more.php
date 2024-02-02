<?php
// more.php
// Note: $host value should be the same defined as services.db.container_name in docker-compose.yml file
// this files does the same as index.php, but it also creates a table, insert a row, and query the newly created table.
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

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
if ($conn->query($sql) === TRUE) {
  echo "<br>Table MyGuests created successfully";
} else {
  echo "<br>Error creating table: " . $conn->error;
}

// prepare 
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
// set parameters and execute
$random_num = rand(1,10000);
$firstname = "John";
$lastname = "Doe ".$random_num;
$email = "john_".$random_num."@example.com";
// bind
$stmt->bind_param("sss", $firstname, $lastname, $email);
// execute
$stmt->execute();
echo "<br>New record created successfully";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>"."id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"];
  }
} else {
  echo "<br>"."0 results";
}

$stmt->close();
$conn->close();
?>


