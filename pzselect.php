<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzawebsiteDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$sql = "SELECT id, NAME,type,CRUST,SIZE,PRICE,IMAGE,DESCRIPTION FROM
pizzalist";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<table class='pizzatable'>";
echo "<tr>";
echo "<th rowspan='6' width='150px'><img src='$row[IMAGE]'
align='left'/></th>";
echo "<th width='75px'>NAME:</th>";
echo"<td>$row[NAME]</td>";
echo "</tr>";
echo "<tr>";
echo "<th>type:</th>";
echo "<td>$row[type]</td>";
echo "</tr>";
echo "<tr>";
echo"<th>CRUST:</th>";
echo"<td>$row[CRUST]</td>";
echo "</tr>";
echo"<tr>";
echo"<th>SIZE:</th>";
echo"<td>$row[SIZE]</td>";
echo" </tr>";
echo"<tr>";
echo" <th>PRICE:</th>";
echo"<td>$row[PRICE]</td>";
echo"</tr>";
echo"<tr>";
echo"<td colspan='2' >$row[DESCRIPTION]</td>";
echo"</tr>";
echo "</table>";
}
} else {
echo "0 results"; }
$conn->close();
?>
</body>
</html>
