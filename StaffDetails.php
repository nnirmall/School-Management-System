<?php
$con =mysqli_connect('127.0.0.1','root','');
mysqli_connect('localhost','root','');
mysqli_select_db($con,'studentregistration');

$sql="SELECT * From staff";
$record=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Staff Details
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="wall.jpg">
	<img src="logo.jpg" height="150" width="150" style="padding-top:50px;" alt="School Management System"/>
		<a style="font-size: 60px; padding-bottom:0px;">School Management System</a>

<h1>Staff Details</h1>
<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>Staff  Name</th>
		<th>Gender</th>
		<th>WorkingYear</th>
		<th>DOB</th>
		<th>Address</th>
		<th>PhoneNo</th>
		<th>EmailAddress</th>
		
		
	</tr>	
<?php
	while ($staff=mysqli_fetch_assoc($record)) {

		echo "<tr>";

		echo "<td>".$staff['Name']."</td>";
		echo "<td>".$staff['Gender']."</td>";
		echo "<td>".$staff['WokingYear']."</td>";
		echo "<td>".$staff['DOB']."</td>";
		echo "<td>".$staff['Address']."</td>";
		echo "<td>".$staff['PhoneNo']."</td>";
		echo "<td>".$staff['EmailAddress']."</td>";
		echo "</tr>";
	}
?>
</table>


</body>
</html>