
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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@font-face {
  font-family: Montserrat-Regular;
  src: url('../fonts/montserrat/Montserrat-Regular.ttf'); 
}

@font-face {
  font-family: Montserrat-Medium;
  src: url('../fonts/montserrat/Montserrat-Medium.ttf'); 
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #032246;
  border-color:#032246;
}

th, td {
  text-align: center;
  padding: 8px;
  border: 1px solid #032246;
  border-color:#032246;
  margin: 0px 0px;
}
input[type=submit]
{

  margin: 0px 0px 0px 0px;
  border:0px;
  background-color: #b3ffb3;
}
a
{
  text-decoration:none;
 text-align: left;
  padding: 8px;
  color:#032246; 
}

tr:nth-child(even){background-color: #f2f2f2}

.a{
background-color: #1a3f48;
color: #ddd;
}
.table100.ver5 .row100 td:hover {
  color: #ffaa00;
}

</style>
</head>
<body><center>
  <?php require('header.php');?>
<div style="overflow-x:auto;">
  <br><br><br><br><br>
  <form name="booktable" method="post" action="booktable.php">
  <table style="border-color:#032246;">
    <tr class="a">
      <th>Time</th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
    </tr>

      <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname="timetable";
            $conn = new mysqli($servername,$username,$password,$dbname);
            $day = array("B"=>"monday", "C"=>"tuesday", "D"=>"wednesday", "E"=>"thursday", "F"=>"friday","G"=>"saturday");
            for($i=7;$i<=13;$i++)
            {
              echo "<tr>";
              echo "<td>".$i.":30</td>";
                for($j="B";$j<="G";$j++)
                {
                  $sql = "SELECT cr FROM ".$day[$j]." where t".$i."30 is null";
                  //echo $sql."<br>";
                  $result = $conn->query($sql);
                  
                  if (isset($result->num_rows)&& $result->num_rows > 0)
                    {
                      echo "<input type='text' name='day' value='".$day[$j]."' hidden>";
                      echo "<input type='text' name='time' value='".$i."' hidden>";
                      echo "<td bgcolor='#b3ffb3'><input type='submit' value='Book Class' name='".$day[$j].$i."'></td>";
                      
                    }
                  else
                    echo "<td bgcolor='#ff8080'>Not Available</td>";
                  
                }
                echo "</tr>";
            }
            
      ?>
 </div>
</table>
</form>
<br><br><br><br><br>
<?php require('footer.php');?>
</center>
</body>
</html>
