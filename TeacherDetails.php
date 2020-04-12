<?php
$con =mysqli_connect('127.0.0.1','root','');
mysqli_connect('localhost','root','');
mysqli_select_db($con,'studentregistration');

$sql="SELECT * From teacher";
$record=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Teacher Details
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="wall.jpg">
	<img src="logo.jpg" height="150" width="150" style="padding-top:50px;" alt="School Management System"/>
		<a style="font-size: 60px; padding-bottom:0px;">School Management System</a>

<h1>Teacher Details</h1>
<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>Teacher Name</th>
		<th>Gender</th>
		<th>EnrollingYear</th>
		<th>DOB</th>
		<th>Department</th>
		<th>Course</th>
		<th>Address</th>
		<th>PhoneNo</th>
		<th>EmailAddress</th>
		
		
	</tr>	
<?php
	while ($teacher=mysqli_fetch_assoc($record)) {

		echo "<tr>";

		echo "<td>".$teacher['Name']."</td>";
		echo "<td>".$teacher['Gender']."</td>";
		echo "<td>".$teacher['EnrollingYear']."</td>";
		echo "<td>".$teacher['DOB']."</td>";
		echo "<td>".$teacher['Department']."</td>";
		echo "<td>".$teacher['Course']."</td>";
		echo "<td>".$teacher['Address']."</td>";
		echo "<td>".$teacher['PhoneNo']."</td>";
		echo "<td>".$teacher['EmailAddress']."</td>";
		echo "</tr>";
	}
?>
</table>


</body>
</html>