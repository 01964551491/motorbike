<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE reg";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE form (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
usertname VARCHAR(30) NOT NULL,
email VARCHAR(50),
pass VARCHAR(30),
con_VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

<h1>REGISTRATION FORM</h1>

<form method="POST" action="log.php">
<input type="text" name="username">
  <br><br>
  Email: <input type="email" name="email">
   <br><br>
   password : <input type="password" name="password"> 
   <input type="submit" name="submit" value="Register"> 
</form>


mysqli_close($conn);
?>