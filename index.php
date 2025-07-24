<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/lme.ico"><!-- Website icon -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"><!-- Importing library -->

    <title>L.M.E.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="login.php" class="navbar-brand">
              <img src="assets/images/LME.png" alt="lme" class="logo" height="50" width="100"><!-- tried adding logo class instead of img-fluid class in styles -->
            </a>
          <a class="navbar-brand" href="login.php"><h2>Let's Make <em>Events</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="login.php">Destination</a></li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" type="button" aria-haspopup="true" aria-expanded="false">Vendors
                  </a>
                  <div class="dropdown-menu">
                          <a class="dropdown-item" href="login.php">Photographer</a>
                          <a class="dropdown-item" href="login.php">Decorator</a>
                          <a class="dropdown-item" href="login.php">Caterer</a>
                          <a class="dropdown-item" href="login.php">Djs</a>             
                  </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="login.php">Ideas</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">E-Invites</a></li>

                <li style="padding: 15px 0px;margin: -5px 15px;"><a href="login.php"><button>Login</button></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="http://localhost/travel-agency-website-template/assets/images/party1.jpg" height=650 alt="First slide">
            <div class="text-content">
              <h4 style="color: #ffffff;font-size: 60px;text-transform: uppercase;font-weight: 700;margin-bottom: 15px;">Here To Create Moments</h4>
              <h2 style="color: #ffffff;font-size: 62px;text-transform: uppercase;letter-spacing: 5px;">That Last a Lifetime</h2>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/travel-agency-website-template/assets/images/birthday1.png" height=650 alt="Second slide">
            <div class="text-content">
              <h4 style="color: #010101;font-size: 60px;text-transform: uppercase;font-weight: 700;margin-bottom: 15px;">Capture the great experiences of life</h4>
              <h2 style="color: #010100;font-size: 62px;text-transform: uppercase;letter-spacing: 5px;">With us</h2>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/travel-agency-website-template/assets/images/wedding1.jpg" height=650 alt="Third slide">
            <div class="text-content">
              <h4>Build Memories</h4>
              <h2>That will never be forgotten</h2>
            </div>
          </div>
        </div>
      </div>
    <!-- Banner Ends Here -->






    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Destinations</h2>
              <a href="login.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from Destination"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
            $des_id=$row['Des_ID'];
            $des_name=$row['Des_Name'];
            $des_city=$row['Des_City'];
            $des_type=$row['Des_Type'];
            $des_cap=$row['Des_Capacity'];
            $des_rent=$row['Des_Rent'];
            $des_veg_nonveg=$row['Des_Veg/Non-Veg'];
            $des_ppp=$row['Des_PricePerPlate'];
            $des_rating=$row['Des_Google Rating'];
            $des_phone=$row['Des_contact'];
            $des_img=$row['Des_Image'];
            $des_link=$row['Des_Link'];  
          if($des_id==4)
          {
            break;
          }
          ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="login.php">
              <??>  
              <?php
              echo '<img src="data:image/jpeg;base64,'.base64_encode($des_img).'" height=200/>';
              ?></a>
              <div class="down-content">
                <a href="login.php"><h4>
                  <?php echo $des_name;?>
                </h4></a>
                <h6>Rent: <?php echo $des_rent;?> ₹</h6>
                <p><?php echo $des_type;?>,Capacity:<?php echo $des_cap;?></p>
                <small>
                     <strong title="Available"><i class="fa fa-map-marker"></i> <?php echo $des_city;?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>
              </div>
            </div>
          </div>
          <?php
          }
          ?>


<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Decorators</h2>
              <a href="login.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from decorator"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
            $d_id=$row['D_id'];
            $d_name=$row['D_name'];
            $d_rating=$row['D_rating'];
            $d_price=$row['D_price'];
            $d_loc=$row['D_location'];
            $d_img=$row['D_image'];
          if($d_id==4)
          {
            break;
          }
          ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="login.php"><?php
              echo '<img src="data:image/jpeg;base64,'.base64_encode($d_img).'" height=200/>';
              ?></a>
              <div class="down-content">
                <a href="login.php"><h4><?php echo $d_name;?></h4></a>

                <h6>Price: <?php echo $d_price;?> ₹</h6>

                <h6>Rating:<?php echo $d_rating;?></h6>

                <small>
                     <strong title="Available"><i class="fa fa-map-marker"></i> <?php echo $d_loc;?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>
              </div>
            </div>
          </div>
          <?php
          }
          ?>


<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Photographers</h2>
              <a href="login.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from photographer"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
            $p_id=$row['p_id'];
          $p_name=$row['p_name'];
          $p_rating=$row['p_Google rating'];
          $p_ser=$row['p_services'];
          $p_bud=$row['p_budget'];
          $p_loc=$row['p_location'];
          $p_img=$row['p_image'];
          $p_days=$row['p_days'];
          if($p_id==104)
          {
            break;
          }
          ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="login.html"><?php
              echo '<img src="data:image/jpeg;base64,'.base64_encode($p_img).'" height=200/>';
              ?></a>
              <div class="down-content">
                <a href="login.html"><h4><?php echo $p_name;?></h4></a>
                <h6>Budget: <?php echo $p_bud;?> ₹</h6>
                <p>Available for <?php echo $p_days;?> Days</p>
                <p><?php echo $p_ser;?></p>
                <h6>Rating:<?php echo $p_rating;?></h6>
                <small>
                     <strong title="Available"><i class="fa fa-map-marker"></i> <?php echo $p_loc;?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>
              </div>
            </div>
          </div>
          <?php
          }
          ?>


<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Caterers</h2>
              <a href="login.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from caterer"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
            $c_id=$row['C_id'];
          $c_name=$row['C_name'];
          $c_rating=$row['C_rating'];
          $c_cuisine=$row['C_cuisines'];
          $c_capacity=$row['C_capacity'];
          $c_ppp=$row['C_priceplate'];
          $c_loc=$row['C_location'];
          $c_img=$row['C_img'];
          if($c_id==12)
          {
            break;
          }
          ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="login.php"><?php
              echo '<img src="data:image/jpeg;base64,'.base64_encode($c_img).'" height=200/>';
              ?></a>
              <div class="down-content">
                <a href="login.php"><h4><?php echo $c_name;?></h4></a>

                <h6>Price: <?php echo $c_ppp;?> ₹</h6>
                <p>Cuisines: <?php echo $c_cuisine;?></p>
                <p>Capacity: <?php echo $c_capacity;?></p>
                <h6>Rating:<?php echo $c_rating;?></h6>

                <small>
                     <strong title="Available"><i class="fa fa-map-marker"></i> <?php echo $c_loc;?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
    

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured DJs</h2>
              <a href="login.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from dj"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
            $dj_id=$row['Dj_id'];
          $dj_name=$row['Dj_name'];
          $dj_rating=$row['Dj_Google rating'];
          $dj_price=$row['Dj_price'];
          $dj_loc=$row['Dj_location'];
          $dj_img=$row['Dj_image'];
          if($dj_id==12)
          {
            break;
          }
          ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="login.php"><?php
              echo '<img src="data:image/jpeg;base64,'.base64_encode($dj_img).'" height=200/>';
              ?></a>
              <div class="down-content">
                <a href="login.php"><h4><?php echo $dj_name;?></h4></a>

                <h6>Price: <?php echo $dj_price;?> ₹</h6>

                <h6>Rating:<?php echo $dj_rating;?></h6>

                <small>
                     <strong title="Available"><i class="fa fa-map-marker"></i> <?php echo $dj_loc;?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                </small>
              </div>
            </div>
          </div>
          <?php
          }
          ?>

<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Ideas</h2>
              <a href="login.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from ideas"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
          $i_id=$row['ideas_id'];
          $i_type=$row['ideas_type'];
          $i_img=$row['ideas_image'];
          if($i_id==4)
          {
            break;
          }
          ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="login.php"><?php
              echo '<img src="data:image/jpeg;base64,'.base64_encode($i_img).'" height=200/>';
              ?></a>
              <div class="down-content">
                <a href="login.php"><h4><?php echo $i_type;?></h4></a>
              </div>
            </div>
          </div>
          <?php
          }
          ?>


    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

              <a href="login.php">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
         <div class="col-md-6">
            <div class="left-content">
              <p align=justify>L.M.E. is an online event management system that fulfills the duties of an event manager. It creates opportunities for people to connect, spend time together, celebrate and experience the diversity of cultures and foster creativity and innovation. It also provides most of the basic functionality required for an event. It allows the user to select from list of vendors, decorators, photographers, destinations, caterers, music resources and so on. </p>
              <p align=justify>The main goal of L.M.E. is to forge people's trust and provide them with a clear and precise summary of an event. The users will no longer have to go to each and every venue and get large piles of cards/information booklets. They will be able to obtain this information from within their own four walls.</p>
              <a href="login.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Grid container -->
  <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2023 Company Name - L.M.E.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>