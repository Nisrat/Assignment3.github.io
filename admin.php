<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="utf-8">
	<title> Admin </title>
</head>
<body id= "kochu">
<center><h1 style="background-color: black">Database of clients</h1></center>
<center><table id="table" border="10" style="background:white"; border-color: black;">
<?php
$mysql_host= 'localhost';
$mysql_user='root';
$mysql_password='';
$var=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'car');
//$query = "select field1, fieldn from table [where clause][group by clause][order by clause][limit clause]";

$sql = "select user.name, user.Phone, user.Adress,user.car_engine,user.car_license,(appointment.name) as mechanic,date from user INNER join appointment where appointment.car_license=user.car_license";
$result =  $var->query($sql);
function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}
if (($result)||(mysqli_errno == 0))
{
  echo '<tr>';
  if (mysqli_num_rows($result)>0)
  {
          //loop thru the field names to print the correct headers
          $i = 0;
          while ($i < mysqli_num_fields($result))
          {
       echo "<th>". mysqli_field_name($result, $i) . "</th>";
       $i++;
    }
    echo "</tr>";

    //display the data
    while ($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
      echo "<tr>";
      foreach ($rows as $data)
      {
        echo "<td align='center'>". $data . "</td>";
      }
    }
  }else{
    echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";
  }
  echo "";
}else{
  echo "Error in running query :". mysqli_error();
}

?>
</table></center>
<br>
<br>
<br>
<center>
<form id="hagol" method="post" action="update.php" style="color: white ">
	Name: <input type="text" name="name" id="name"><br><br>
	Phone: <input type="text" name="phone" id="phone"><br><br>
	Address: <input type="text" name="address" id="address"><br><br>
	Car Engine Number: <input type="text" name="carE" id="carE"><br><br>
	Car license: <input type="text" name="carL" id="carL"><br><br>
	Mechanics Name: <input type="text" name="mechanic" id="mechanic"><br><br>
	Date: <input type="text" name="date" id="date"><br><br> 
	<script>
	var table = document.getElementById("table"),rIndex;
	for(var i=0;i<table.rows.length;i++)
	{
		
		table.rows[i].onclick=function()
		{
			rIndex=this.rowIndex;
			console.log(this.cells[0].innerHTML);
			//console.log(table[rIndex][0]);
			var x=this.cells[0].innerHTML;
			document.getElementById("name").value=x;
			sessionStorage.setItem("nam", x);
			sessionStorage.setItem("phon", this.cells[01].innerHTML);
			sessionStorage.setItem("add", this.cells[02].innerHTML);
			sessionStorage.setItem("key",this.cells[04].innerHTML);
			sessionStorage.setItem("meh", this.cells[05].innerHTML);
			sessionStorage.setItem("dat", this.cells[06].innerHTML);
			
			
			document.getElementById("phone").value=this.cells[01].innerHTML;
			document.getElementById("address").value=this.cells[02].innerHTML;
			document.getElementById("carE").value=this.cells[03].innerHTML;
			document.getElementById("carL").value=this.cells[04].innerHTML;
			document.getElementById("mechanic").value=this.cells[05].innerHTML;		
			document.getElementById("date").value=this.cells[06].innerHTML;
		};
	}
</script>
<br>
<input type="submit" value="Update" id="test" name="test">
<?php

function testfun()
  {
//$mysql_host= 'localhost';
//$mysql_user='root';
//$mysql_password='root';
//$var=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'car');

//	$a='<script>document.write(sessionStorage.getItem("nam")); </script>';
  //  $b='<script>document.write(sessionStorage.getItem("phon")); </script>';
//	$c='<script>document.write(sessionStorage.getItem("add")); </script>';
	$aa='<script>document.write(sessionStorage.getItem("key")); </script>';
	$_SESSION["1"]= $_POST["name"];
	$_SESSION["2"]= $_POST["phone"];
	$_SESSION["3"]= $_POST["address"];
	$_SESSION["4"]=$aa;
	
//	$sql = "UPDATE user SET name='$d' , phone='$e', adress='$f' WHERE car_license='$aa'";
//echo $sql;
 //$var->query($sql);
//if($var->query($sql)==true)
// {
	
//	echo "heyy";
// }
}

if(array_key_exists('test',$_POST)){
   testfun();
}

?>
</form>
</center>
</body>
</html>
