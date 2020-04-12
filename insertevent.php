<?php
	
	$con =mysqli_connect('127.0.0.1','root','');

	if(!$con)
	{
		echo "Not connected to server";
	}

	if(!mysqli_select_db($con,'studentregistration'))
	{
		echo "Database not selected";
	}

	$Event = $_POST['Event'];
	$Date = $_POST['DD'];


	$sql="INSERT INTO evn (Event,DD) VALUES('$Event','$Date')";

	if (!mysqli_query($con,$sql))
	{
	echo 'Not Inserted';
	}
	

	header("index.html");


?>







