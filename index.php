<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<Title> Car Workshop</Title>
</head>

<body>
<div class="client">
<center>
<h1>
	Online Car Management
</h1>
</center>

<div class="container"; id="container">
	<form action="cus.php" >
	Name:<br>
  <input type="text" name="name" ><br>
  Phone:<br>
  <input type="text" name="phone"><br>
  Address:<br>
  <input type="text" name="address"><br>
  Car Engine Number:<br>
  <input type="Text" name="car_engine"><br>
  Car License Number:<br>
  <input type="Text" name="car_license"><br>
 
	<strong><?php echo "Today is ".date("Y-m-d")."<br>";
	?></strong>
	Date:
  <input type="text" name="date"><br>
  date format:yyyy-mm-dd;
  <br>
  <br>
  <input type="Submit">
    </form>
</div>
	
</div>
</body>
</html>