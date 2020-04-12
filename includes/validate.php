<?php
include 'conn.php';
	//$id=$_SESSION['id'];
	//start_session();
	//echo "<script type='text/javascript'>alert('Session shown');</script>";



		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$userid = $_POST['userid'];
			$password = $_POST['password'];
			//$result = mysqli_query($conn,"SELECT * from users where userid=='$userid' and password=='$password'");
			$stmt = $pdo->prepare("SELECT * from users where userid=? and password=?");
			$stmt->bindParam(1,$userid);
			$stmt->bindParam(2,$password);
			if($result=$stmt->execute()){

		//echo "executed";
		
			if ($stmt->rowCount()==1) {
			echo"roq_cnt";
			$_SESSION["admin"]=$userid;
			header('Location: http://localhost/skool/AdminLogin.php');
		}

		else{
			$message = "Wrong Username/Password";
			echo "<script type='text/javascript'>alert('$message');</script>";
				header('Location: http://localhost/skool/ALogin.php');	
		}
}
}




?>