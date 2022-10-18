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
<th>Code</th>
<th>Name</th>
<th>Continent</th>
<th>Region</th>
<th>SurfaceArea</th>
<th>IndepYear</th>
<th>Population</th>
<th>LifeExpectancy</th>
<th>GNP</th>
<th>GNPOld</th>
<th>LocalName</th>
<th>GovernmentForm</th>
<th>HeadOfState</th>
<th>Capital</th>
<th>Code2</th>


</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "world");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from country ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo 
"</td><td>" . $row["Code"] . 
"</td><td>" . $row["Name"] . 
"</td><td>". $row["Continent"]. 
"</td><td>". $row["Region"]. 
"</td><td>". $row["SurfaceArea"]. 
"</td><td>". $row["IndepYear"]. 
"</td><td>". $row["Population"].
"</td><td>". $row["LifeExpectancy"].
"</td><td>". $row["GNP"].
"</td><td>". $row["GNPOld"].
"</td><td>". $row["LocalName"].   
"</td><td>". $row["GovernmentForm"].
"</td><td>". $row["HeadOfState"].
"</td><td>". $row["Capital"].
"</td><td>". $row["Code2"].      
"</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>