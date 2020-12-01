<?php
session_start();
?>
<?php
$mysql_host= 'localhost';
$mysql_user='root';
$mysql_password='';
$var=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($var,'car');

$name = $_GET["name"];
$phone= $_GET["phone"];
$address= $_GET["address"];
$carE= $_GET["car_engine"];
$carL= $_GET["car_license"];
$_SESSION["raselPagol"]= $carL;


$sql="INSERT INTO user (`name`, `phone`,`adress`,`car_engine`,`car_license`) VALUES('$name','$phone','$address','$carE','$carL')";

if(mysqli_query($var,$sql))
{
	$var->query($sql);
}	

$dat = $_GET["date"];
$_SESSION["adiIsLove"] = $dat;


$arr=array();
$sql=("select * from appointment where name='Rafid' and date='$dat'");
$result = $var->query($sql);
$rowcount = mysqli_num_rows($result);
if($rowcount<=4)array_push($arr,'Rafid');

$sql=("select * from appointment where name='Rasel' and date='$dat'");
$result = $var->query($sql);
$rowcount = mysqli_num_rows($result);
if($rowcount<=4)array_push($arr,'Rasel');

$sql=("select * from appointment where name='Raquel' and date='$dat'");
$result = $var->query($sql);
$rowcount = mysqli_num_rows($result);
if($rowcount<=4)array_push($arr,'Raquel');

$sql=("select * from appointment where name='Rana' and date='$dat'");
$result = $var->query($sql);
$rowcount = mysqli_num_rows($result);
if($rowcount<=4)array_push($arr,'Rana');

$sql=("select * from appointment where name='Rimo' and date='$dat'");
$result = $var->query($sql);
$rowcount = mysqli_num_rows($result);
if($rowcount<=4)array_push($arr,'Rimo');

echo " <br>";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title> Avaiable Mechanics</title>
</head>

<body id="meh">
		<center><h1 style="background-color: black"> Avaible Mechanics</h1></center>
<center>		
<form action="Approval.php">
	
    <select name="option">
        <option selected="selected" >Choose one</option>
        <?php
        foreach($arr as $item){
        ?>
        <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" value="Submit">
</form>
</center>
</body>
</html>