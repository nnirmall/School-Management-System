<html>
<head>
<title>School Management System</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="wall.jpg">
	<img src="logo.jpg" height="150" width="150" style="padding-top:0px;" alt="School Management System"/>
		<a style="font-size: 60px; padding-bottom:0px;">School Management System</a>
	 <ul>
        <li class="manulist">
            <a class ="menulista" href="index.php">Home</a>
            	 <div align="center">
                                   
                 </div>
        </li>
     </ul>
	<h1>Student Registration</h1>
	 
<div class="std">
	<form action="insert.php" method="post">
		

		Name:<input type="text" name ="username">
				<br/>
		Gender:<input type="text" name ="Gender">
				<br/>
		DOB:<input type="text" name ="DOB">
				<br/>
		EnrollingYear:<input type="text" name ="EnrollingYear">
				<br/>
		Department:<input type="text" name ="Department">
				<br/>
		Course:<input type="text" name ="Course">
				<br/>
		Address:<input type="text" name ="Address">
				<br/>
		PhoneNo:<input type="text" name ="PhoneNo">
				<br/>
		EmailAddress:<input type="email" name ="EmailAddress">
				<br/>
		Grade:<input type="text" name ="Grade">
				<br/>

				<input type="submit" value="Insert">
	</form>
</div>
		



</body>
</html>
