<?php
$con =mysqli_connect('127.0.0.1','root','');
mysqli_connect('localhost','root','');
mysqli_select_db($con,'studentregistration');

$sql="SELECT * From evn";
$record=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Student Details
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="wall.jpg">

<h1>News and Events of the school</h1>
<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>Events & News</th>
		
		
	</tr>	
<?php
	while ($evn=mysqli_fetch_assoc($record)) {

		echo "<tr>";

		echo "<td>".$evn['Event']."</td>";
		echo "</tr>";
	}
?>
</table>


</body>
</html>