
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
$sql="select Name from stud_teachers where Username='".$_SESSION['username']."'";
$result=$conn->query($sql);
if (isset($result->num_rows)&& $result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
      {
        $name=$row['Name'];
        break;
      }
    }


$sql="select Username from stud_teachers where Username='".$_SESSION['username']."'";
$result=$conn->query($sql);
if (isset($result->num_rows)&& $result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
      {
        $id=$row['Username'];
        break;
      }
    }

    $sql="select Department from stud_teachers where Username='".$_SESSION['username']."'";
$result=$conn->query($sql);
if (isset($result->num_rows)&& $result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
      {
        $dept=$row['Department'];
        break;
      }
    }

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="requestform.css">
</head>
<body>
<div class="container">
  <form action="resp.php" method="post">
  <div class="row">
    <br><br><br><br>
    <div class="container">
    <center><h2>Request Class</h2></center>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="name">Name: </label>
    </div>
    <div class="col-75">
      <?php echo "<input type='text' id='sapid' name='name' value='".$name."' disabled>"; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="sapid">Sap Id: </label>
    </div>
    <div class="col-75">
      <?php echo "<input type='text' id='sapid' name='sapid' value='".$id."' disabled>"; ?>
      
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="department">Department: </label>
    </div>
    <div class="col-75">
     <?php echo "<input type='text' id='sapid' name='dept' value='".$dept."' disabled>"; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject: </label>
    </div>
    <div class="col-75">
      <select id="subject" name="subject">

        <option value="DE" >DE</option>
        <option value="MATHS">Maths</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="teacher">Teacher: </label>
    </div>
    <div class="col-75">
      <select id="teacher" name="teacher">
        <option value="Abhilasha More">Abhilasha More</option>
        <option value="Swapna Naik">Swapna Naik</option>
        <option value="Manish Solanki">Manish Solanki</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="topic">Topic: </label>
    </div>
    <div class="col-75">
      <input type="text" id="topic" name="topic" placeholder="The topic" required>
    </div>
  </div>
  <div class="row">  </div>
  <div class="row">
   <center> <input type="submit" value="Submit"> </center>
  </div>
  </form>
</div>

</body>
</html>
