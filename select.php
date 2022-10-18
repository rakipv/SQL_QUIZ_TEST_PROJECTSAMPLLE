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
<body><div class="text-container">
              <h3>SQL BASIC QUIZ</h3>
              <p> 1.DIPALY ALL RECORD IN CITY </p>
                   

          </div>
	

	<form action="" method="post">
		<input type="text" name="textvalue" id="input">
		<input type="submit"  id="button" name="submit" value="submit sql">
		
	</form>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Population</th>
<th>CountryCode</th>
<th>District</th>
</tr>

<span id="center">
<?php
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit']))

{
	
	$sqq= $_POST['textvalue'];

}
$conn = mysqli_connect("localhost", "root", "", "world");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = $sqq;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<span text-align:center ;margin-top:200px; ">';
	echo '<span style="color:#154734;text-align:center; border: 3px  black;  padding: 15px;  background: lightblue;  background-clip: padding-box;display: inline-block;">TRUE ANSWER</span>';
// output data of each row
	
while($row = $result->fetch_assoc()) {

echo 
'</td><td>' . $row["ID"] . 
'</td><td>' . $row["Name"] . 
'</td><td>'. $row["Population"]. 
'</td><td>'. $row["CountryCode"]. 
'</td><td>'. $row["District"]. 
'</td></tr>';
}
echo "</table>";
} else {echo '<span style="color:#FF0000;text-align:center; border: 3px  black;  padding: 15px;  background: lightblue;  background-clip: padding-box;display: inline-block;">NO / WRONG ANSWER</span>';}



// echo 'NO QUERY / WRONG SQL QUERY'; }
$conn->close();
?>
</span>
</table>
</body>
</html>
<style type="text/css">


	textarea {
   
}
	
	#input{
		 display: block;
    margin-left: auto;
    margin-right: auto;
		 width: 300px;
  height: 150px;
	}




	html {
    box-sizing: border-box;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}

html,
body {
    overflow: hidden;

    
}

#center{

    text-align: center;
    margin-left: 600px;
}





.text-container {

margin-top: 100px;
    text-align: center;
}






@keyframes flash {
    0% {
        background-color: #4cf5c2;
    }

    49% {
        background-color: #4cf5c2;
    }

    50% {
        background-color: #000;
    }

    99% {
        background-color: #000;
    }

    100% {
        background-color: #4cf5c2;
    }
}

#button {
    padding: 15px;
  background-color: #4CAF50; /* Green */
  border: 3px;
  color: white;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
  padding-box;
  margin-left: 630px;
}





@keyframes pulse {
    0% {
        opacity: 1;
    }

    49% {
        opacity: 9;
    }

    50% {
        opacity: .8;
    }

    99% {
        opacity: .5;
    }

    100% {
        opacity: .3;
    }
}

/* MEDIA QUERY */

@media (max-width: 420px) {
    body {
        font-size: .8rem;
    }

    main {
        width: 92%;
    }

    section {
        background: linear-gradient(to right, #3f2b96, #1f0961);
    }

    label {
        font-size: .71rem;
    }

    label .alphabet {
        margin: 0 .9rem 0 .7rem;
    }

    .jshdgdgwgdwfdfwdwjfdjwwdwdco:checked+label {
        -webkit-text-stroke: .1px #fff;
    }

    label .jdsjkefkefkefefexco {
        width: 16px;
    }

    label .jfdedgwfzexf4hjin {
        width: 14px;
    }

    #game-over h1 {
        font-size: 3rem;
    }

    .score-counter {
        width: 120px;
        height: 5%;
        font-size: .7rem;
    }

    .score-text {
        margin: 0 20px 0 0;
    }

    .over-text-cont h2 {
        margin-bottom: 40px;
    }

    .over-text-cont #btn {
        padding: 3px 0;
    }

    .refresh-content {
        width: 90%;
    }

    .refresh-content {
        display: grid;
        font-size: .8rem;
    }
}

@media (max-width: 325px) {

    label {
        font-size: .63rem;
    }

    label .alphabet {
        margin: 0 .55rem 0 .7rem;
    }

    label .jdsjkefkefkefefexco {
        width: 14px;
    }

    label .jfdedgwfzexf4hjin {
        width: 12px;
    }

}
</style>

