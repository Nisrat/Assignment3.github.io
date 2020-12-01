<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title> Record page </title>
</head>
<body id="kochu">
<?php
session_start();
?>

<?php
$mysql_host= 'localhost';
$mysql_user='root';
$mysql_password='';
$var=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'car');

$a=$_POST["name"];
$b=$_POST["phone"];
$c=$_POST["address"];
$d=$_POST["carL"];
$sql = "UPDATE user SET name='$a' , phone='$b', adress='$c' WHERE car_license='$d'";
if($var->query($sql)==true)
{
$c=$_POST["mechanic"];
$e=$_POST["date"];
$sql = "UPDATE appointment SET name='$c' , date='$e' WHERE car_license='$d'";
if($var->query($sql)==true)
{
	echo "YOUR RECORD HAS BEEN UPDATED !";
}
}
?>
<br>
<br>
<form action="admin.php">
<input type = "submit" value="Go Back">
</form>
</body>
</html>