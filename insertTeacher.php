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

	$Name = $_POST['username'];
	$Gender = $_POST['Gender'];
	$DOB = $_POST['DOB'];
	$TeachingYear = $_POST['EnrollingYear'];
	$Department = $_POST['Department'];
	$Course = $_POST['Course'];
	$Address = $_POST['Address'];
	$PhoneNo = $_POST['PhoneNo'];
	$EmailAddress = $_POST['EmailAddress'];


	echo "name is $Name";

	$sql="INSERT INTO teacher (Name,Gender,DOB,EnrollingYear,Department,Course,Address,PhoneNo,EmailAddress) VALUES('$Name','$Gender','$DOB','$TeachingYear','$Department','$Course','$Address','$PhoneNo','$EmailAddress')";

	if (!mysqli_query($con,$sql))
	 {
		echo "Enter all details";
		header("index.html");

	}
	else
	{
		echo "Data Inserted";
	}

	header("index.html");


?>







