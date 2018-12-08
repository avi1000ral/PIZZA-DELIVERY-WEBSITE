<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzawebsiteDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO pizzalist
(id,NAME,type,CRUST,SIZE,PRICE,IMAGE,DESCRIPTION) VALUES
(1, 'Veg Italiano','chicago','Pan','Medium','625','veg1.png','red
capsicum,mushroom,jalapenos,exotic green and yellow zucchini,black olive'),
(2, 'Veg Exotica','newyork','Pan','Medium','575','vegexotica1.png','red
capsicum,green capsicum,baby corn,black olives,jalapenos'),
(3, 'Veggie
Supreme','greek','Pan','Medium','545','veggiesupreme1.jpg','onion,capsicum,mus
hroom,red paprika,black olvies,sweet corn'),
(4, 'Spiced Paneer','california','Pan','Medium','415','paneer1.jpg','onion,spiced
paneer,tomato')";
if ($conn->query($sql) === TRUE) {
echo "New records created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>