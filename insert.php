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
	$EnrollingYear = $_POST['EnrollingYear'];
	$Department = $_POST['Department'];
	$Course = $_POST['Course'];
	$Address = $_POST['Address'];
	$PhoneNo = $_POST['PhoneNo'];
	$EmailAddress = $_POST['EmailAddress'];
	$Grade = $_POST['Grade'];



	$sql="INSERT INTO student (Name,Gender,DOB,EnrollingYear,Department,Course,Address,PhoneNo,EmailAddress,Grade) VALUES('$Name','$Gender','$DOB','$EnrollingYear','$Department','$Course','$Address','$PhoneNo','$EmailAddress','$Grade')";

	if (!mysqli_query($con,$sql))
	 {
		echo "Enter all details";
	}
	else
	{
		echo "Data Inserted";
	}

	header("index.html");


?>







