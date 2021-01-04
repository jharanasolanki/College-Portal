
<?php session_start();
if(!isset($_SESSION['username']))
{
  echo"hello";
  header("Location:unaval.php");
  exit();
}
if(!isset($_POST))
{
	header("Location:unaval.php");
  exit();
}
	$sub=$_POST["subject"];
	$id=$_SESSION['username'];
	$teach=$_POST['teacher'];
	$subject ="Mail Function in PHP";
	$from="rahuldoshi34@gmail.com";
	$message ="Request for extra lecture for $sub by $id";
    $headers = "From:".$from;
    
    
$servername = "localhost";
$username = "root";
$passwordPHP = "";
$dbname="timetable";
$conn = new mysqli($servername,$username,$passwordPHP,$dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$sql="select EmailId from stud_teachers where Name='".$teach."'";
$result=$conn->query($sql);
$email="";
if (isset($result->num_rows)&& $result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
      {
      	$email=$row['EmailId'];
      	break;
      }
  }

  $res=mail($email,$subject,$message,$headers);
    header("Location:success.php");
  exit();

    ?>