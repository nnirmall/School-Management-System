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
	$WokingYear=$_POST['WokingYear'];
	$Address=$_POST['Address'];
	$PhoneNo = $_POST['PhoneNo'];
	$EmailAddress = $_POST['EmailAddress'];


	

	$sql="INSERT INTO staff (Name,Gender,DOB,WokingYear,Address,PhoneNo,EmailAddress) VALUES('$Name','$Gender','$DOB','$WokingYear','$Address','$PhoneNo','$EmailAddress')";

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







