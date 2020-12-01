<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> Record page </title>
</head>
<body id="lol">
<center><h1> Client Approval Page </h1></center>
<?php
session_start();
?>
<div class="container">
<?php
$mysql_host= 'localhost';
$mysql_user='root';
$mysql_password='';
$var=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'car');

$mechanic= $_GET["option"];
$date=$_SESSION["adiIsLove"];	
$carL=$_SESSION["raselPagol"];
$sql = "INSERT INTO appointment (car_license, name,date)
VALUES ('$carL','$mechanic', '$date')";

if ($var->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $var->error;
 }
?>
</div>
<br>
<br>
<center>
<form action="who.php">
<input type = "submit" value="Go Back">
</form>
<center>
</body>
</html>