<?php session_start();
if(!isset($_SESSION['username']))
{
  echo"hello";
  header("Location:unaval.php");
  exit();
}
$servername = "localhost";
$username = "root";
$passwordPHP = "";
$dbname="timetable";
$conn = new mysqli($servername,$username,$passwordPHP,$dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$sql="select Position from stud_teachers where Username='".$_SESSION['username']."'";
    $result=$conn->query($sql);
    
    if (isset($result->num_rows)&& $result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
      {

            if($row['Position']!="teacher"&&$row['Position']!="cr")
    {
        echo"hello";
  header("Location:unaval.php");
  exit();
    }}
  }
?>
<html>
<head>
	<title> Book Class</title>
  <link rel="stylesheet" type="text/css" href="booktable.css">
</head><body><center>
<div class="container">

<?php
//	if(isset($_POST['submit']))
//''
$d="";
$fromtime="";
$totime="";
	$day = array("B"=>"monday", "C"=>"tuesday", "D"=>"wednesday", "E"=>"thursday", "F"=>"friday","G"=>"saturday");
            for($i=7;$i<=13;$i++)
            {
                for($j="B";$j<="G";$j++)
                {
                    if(isset($_POST["$day[$j]"."$i"]))
                    {
                      $fromtime=$i.":30";
                      $totime=($i+1).":30";
                      $d=$day[$j];
                      break;
                    }
                }
            }
            
            

		echo "<form name='booked' action='success.php' method='post'>";
		  echo "<div class='row'>
    <center><h2>Book Class</h2></center>
  </div>	";
		echo "<div class='row'>
    		<div class='col-25'>Day:
    		</div>
    	<div class='col-75'>
	      	<input type='text' name='day' value='".$d."' disabled>
    	</div>
  		</div>
  		<div class='row'>
    		<div class='col-25'>From:
    		</div>
    	<div class='col-75'>
	      	<input type='text' name='starttime' value='".$fromtime."' disabled>
    	</div>
  		</div>
  		<div class='row'>
    		<div class='col-25'>Department:
    		</div>
    	<div class='col-75'>";
      $sql="select Department from stud_teachers where Username='".$_SESSION['username']."'";
      
    $result=$conn->query($sql);
    
    if (isset($result->num_rows)&& $result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
      {
        echo "<input type='text' name='department' value='".$row['Department']."' disabled>";
      }
    }
    $sql="select cr from $d where t".$i."30 is null";
    $result=$conn->query($sql);
    
    if (isset($result->num_rows)&& $result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
      {
        echo "</div>
      </div><div class='row'><div class='col-25'>CR:
        </div><div class='col-75'><input type='text' name='cr' value='".$row['cr']."' disabled>";
        $sql="update $d set ".$i."30='' where cr='".$row['cr']."'";
        break;
      }
    }
	      	echo"
    	</div>
  		</div>
  		<div class='row'>
    		<div class='col-25'>Subject:
    		</div>
    	<div class='col-75'>
	      	<input type='text' name='subject'>
    	</div>
  		</div> ";
		echo "<input type='submit' value='Confirm Booking'>";
		echo "</form>";
//	}
?></center></div>
</html>