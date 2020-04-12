<?php

$con =mysqli_connect('127.0.0.1','root','');
mysqli_connect('localhost','root','');
mysqli_select_db($con,'studentregistration');



$sql="SELECT * From student";
$record=mysqli_query($con,$sql);
/*$jpg_image = imagecreatefromjpeg('Citizenship.jpg');

  // pick color for the text
  $color= imagecolorallocate($jpg_image, 0, 0, 0);
 
  // Set font to the text
  $font_path = 'C:\Windows\Fonts\arial.ttf';
 
 
  // Set text to be write on image
  while ($register=mysqli_fetch_assoc($record)) {

		$text = $register['firstname'];
		$text1 = $register['district'];

	}
  
  
  // Write text on image
  imagettftext($jpg_image, 12, 0, 185, 150, $color, $font_path, $text);
  imagettftext($jpg_image, 12, 0, 285, 168, $color, $font_path, $text1);
 
  // tell the browser that the content is an image
  header('Content-type: image/jpeg');
 
  // output image to the browser
  imagejpeg($jpg_image);*/
  



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


		<th>Registration Number</th>
		<th>Student Name</th>
		<th>Department</th>
		<th>Grade</th>
		
	</tr>	
<?php


	while ($student=mysqli_fetch_assoc($record)) {

		echo "<tr>";
		echo "<td>".$student['RegNo']."</td>";
		echo "<td>".$student['Name']."</td>";
		echo "<td>".$student['Department']."</td>";
		echo "<td>".$student['Grade']."</td>";
		echo "</tr>";
	}
?> -->
</table>


</body>
</html>