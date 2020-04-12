<?php
$con =mysqli_connect('127.0.0.1','root','');
mysqli_connect('localhost','root','');
mysqli_select_db($con,'studentregistration');

$sql="SELECT * From student";
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
	<img src="logo.jpg" height="150" width="150" style="padding-top:50px;" alt="School Management System"/>
		<a style="font-size: 60px; padding-bottom:0px;">School Management System</a>

<h1>Student Details</h1>
<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>Student Name</th>
		<th>Gender</th>
		<th>EnrollingYear</th>
	
		<th>Department</th>
		<th>Course</th>
		
		<th>EmailAddress</th>
		<th>Grade</th>
		
	</tr>	
<?php
	while ($student=mysqli_fetch_assoc($record)) {

		echo "<tr>";

		echo "<td>".$student['Name']."</td>";
		echo "<td>".$student['Gender']."</td>";
	
		echo "<td>".$student['Department']."</td>";
		echo "<td>".$student['Course']."</td>";
	
		echo "<td>".$student['EmailAddress']."</td>";
		echo "<td>".$student['Grade']."</td>";
		echo "</tr>";
	}
?>
</table>


</body>
</html>