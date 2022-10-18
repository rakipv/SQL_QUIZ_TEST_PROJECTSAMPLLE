<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>CountryCode</th>
<th>District</th>
<th>Population</th>



</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "world");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from city ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo 
"</td><td>" . $row["ID"] . 
"</td><td>" . $row["Name"] . 
"</td><td>". $row["CountryCode"]. 
"</td><td>". $row["District"]. 
"</td><td>". $row["Population"]. 
     
"</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>