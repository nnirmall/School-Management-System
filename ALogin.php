<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Please Login !";
	  $color="green";
}

    



?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
	     
        <title>School Management System</title>
    </head>
    <body background="wall.jpg">
        <center>
            <h1>School Management System</h1>
	          <img src="logo.jpg" />
	          <hr/>
            <?php echo "<font size='4' color='$color'>$login_message</font>";?>
            <form  action="includes/validate.php" onsubmit="return" method="post"><br/>
                <input type="text" id="id" name="userid" placeholder="your id" autofocus=""   /><br/><br/><br/>
                <input type="password" id="password" name="password" placeholder="your password"  /><br/><br/><br/>
                <input type="submit" value="Login" />
            </form>
        </center>
    </body>
</html>
