<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzawebsiteDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE pizzalist(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAME varchar(255) DEFAULT NULL,
type varchar(255) DEFAULT NULL,
CRUST varchar(255) DEFAULT NULL,
SIZE varchar(255) DEFAULT NULL,
PRICE double DEFAULT NULL,
IMAGE varchar(255) DEFAULT NULL,
DESCRIPTION text
)";
if ($conn->query($sql) === TRUE) {
echo "Table pizzalist created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
