<?php 
session_start();
$db = "studentregistration";
$host = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($host,$username,$password,$db);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>