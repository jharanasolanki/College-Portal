
<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
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
  </head>

  <body>   <header class="header_area">
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
    </header></nav></body></html>