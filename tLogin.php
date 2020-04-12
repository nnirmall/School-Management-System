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

require_once 'includes/conn.php';
    //$id=$_SESSION['id'];
    //start_session();
    //echo "<script type='text/javascript'>alert('Session shown');</script>";



        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $userid = $_POST['userid'];
            $password = $_POST['password'];
            //$result = mysqli_query($conn,"SELECT * from users where userid=='$userid' and password=='$password'");
            $stmt = $pdo->prepare("SELECT * from teacherusers where userid=? and password=?");
            $stmt->bindParam(1,$userid);
            $stmt->bindParam(2,$password);
            if($result=$stmt->execute()){

        //echo "executed";
        
            if ($stmt->rowCount()==1) {
            echo"roq_cnt";
            $_SESSION["teacher"]=$userid;
            header('Location: http://localhost/skool/TeacherLogin.php');
        }

        else{
            $message = "Wrong Username/Password";
            echo "<script type='text/javascript'>alert('$message');</script>";
                header('Location: http://localhost/skool/tLogin.php');  
        }
}
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
            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post"><br/>
                <input type="text" id="id" name="userid" placeholder="your id" autofocus=""   /><br/><br/><br/>
                <input type="password" id="password" name="password" placeholder="your password"  /><br/><br/><br/>
                <input type="submit" value="Login" />
            </form>
        </center>
    </body>
</html>
