<?php
session_start();


$servername = "localhost";
$username = "root";
$passwordPHP = "";
$dbname="timetable";
$conn = new mysqli($servername,$username,$passwordPHP,$dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
global $UserId;
$UserId=$_POST["UserID"];
$password=($_POST["Password"]);
$email=$_POST["EmailId"];
$_SESSION['username']=$UserId;
$sql = "SELECT Name from stud_teachers where Username='".$UserId."' AND Password='".$password."'";
//$sql1 = "SELECT UserId from teachers where UserId='".$UserId."' AND Password='".$password."'";
//$sql = "SELECT UserId from voters where userid='".$UserID."' AND number=".$password."";
$result = $conn->query($sql);

if($result->num_rows==1)
{
	while($row = $result->fetch_assoc()) {
        $name = $row["Name"];
    }
	//echo $result;
	$sql1="SELECT Value from stud_teachers where Name='".$name."'";
	$sql2="UPDATE stud_teachers set EmailId='".$email."' where Name='".$name."'";
	if($conn->query($sql2) ==TRUE){}
	else{echo "Fail";}
	//echo $sql1;
	$result1 = $conn->query($sql1);
	while($row1 = $result1->fetch_assoc()){
		$value=$row1["Value"];
	}
	if($value==0){
	include 'Form.html';
	}
	else
	{header("Location:index.php");
	exit();
	}
}
else
{
	header("Location:unaval.php");
	exit();
}


/*else if($result1->num_rows==1){
	include 'teachers.php';
}
else{include 'fail.php';}*/
?>