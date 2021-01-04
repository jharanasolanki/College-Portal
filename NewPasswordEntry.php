<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo"hello";
	header("Location:fail.php");
	exit();
}
?>

<?php


$servername = "localhost";
$username = "root";
$passwordPHP = "";
$dbname="timetable";
$conn = new mysqli($servername,$username,$passwordPHP,$dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$password=$_POST["NewPassword"];
$Confirm=$_POST["ConfirmPassword"];
$user=$_SESSION['username'];
if($password == $Confirm){

		$sql="update stud_teachers set Password='".$password."',Value='1' where Username='".$user."'";
		$conn->query($sql);
		header("Location:index.php");
	exit();
}else{
	include 'fail.php';
}