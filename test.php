
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
  <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Student Portal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  <style>
    ?>

      @font-face {
font-family: "Flaticon1";
src: url("flaticon1.eot");
src: url("flaticon1.eot#iefix") format("embedded-opentype"),
url("flaticon1.woff") format("woff"),
url("flaticon1.ttf") format("truetype"),
url("flaticon1.svg") format("svg");
font-weight: normal
font-style: normal;
}
      .header-right
      {
        float:right;
      }
      .header-left
      {
        float:left;
      }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Student Portal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </style>
</head>
<body>
  <body>   
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            
            </form>
          </div>
        </div><nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php"
              ><b style="color:#032246;"><font size="6px">Student Portal</font></b>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
            <div class="header-left">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="guitable.php">Book Class</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li></div>
              </ul>
                <div style="position:fixed; left:1250px">
                  <ul class="nav navbar-nav menu_nav ml-auto">
                  <li class="nav-item">

                  <?php 
                      if(isset($_SESSION['username']))
                      {
                          echo "<a class='nav-link' href='logout.php'>Logout</a>";
                      }
                      else
                      {
                         echo "<a class='nav-link' href='Login.php'>Login</a>";
                      }
                      ?>
                  </li>
                 </ul>                
                </div>
            </div>
          </div>
        </nav>
      </div>
    </header></nav>

<section class="home_banner_area">
<div class="container1">
  <form action="resp.php" method="post">
  <div class="row">
    <br><br><br><br>
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
</section>
</body>
</html>
