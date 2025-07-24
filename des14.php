<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/lme.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>L.M.E.</title>
    <style>
      container,product{
        background-image: url('http://localhost/travel-agency-website-template/assets/images/bg.jpeg');
      }
    </style>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body style="background: #C5C7CC;">

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="customerpage.php" class="navbar-brand">
              <img src="assets/images/LME.png" alt="lme" class="logo" height="50" width="100">
            </a>
          <a class="navbar-brand" href="customerpage.php"><h2>Let's Make <em>Events</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="packages.php">Destination</a></li>
                
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" type="button" aria-haspopup="true" aria-expanded="false">Vendors
                  </a>
                  <div class="dropdown-menu">
                          <a class="dropdown-item" href="photographer.php">Photographer</a>
                          <a class="dropdown-item" href="decorator.php">Decorator</a>
                          <a class="dropdown-item" href="caterer.php">Caterer</a>
                          <a class="dropdown-item" href="dj.php">Djs</a>             
                  </div>
                </li>


                <li class="nav-item"><a class="nav-link" href="ideas.php">Ideas</a></li>
                <li class="nav-item"><a class="nav-link" href="e-invites.php">E-Invites</a></li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" type="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"> </i>
          
  

                  <?php 
                    if (isset($_SESSION['UserName']))
                    {
                      echo $_SESSION["UserName"];
                    }
                  ?>
                  </a>
                  <div class="dropdown-menu">
                  <a class="dropdown-item" href="show-wishlist.php">Wishlist</a>        
                  <a class="dropdown-item" href="logout.php">logout</a>        
                  </div>
                </li>     
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    
        <div class="container" style="background: #C5C7CC;">
          <div class="row">
            <div class="col-md-12">
            </div>
          </div>
        </div>
      </div>

    <div class="products" style="background: #C5C7CC ; margin-top: 50px;">
      <div class="container">
        <div class="row">
        <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from Destination where Des_ID=14"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
          $des_id=$row['Des_ID'];
          $p_id=$row['p_id'];
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
          if($des_id==14)
          {
             
          ?>
<div class="products">
      <div class="container">
        <hr color=black>
        <div class="row">
          <div class="col-md-6">
            <div>
              <br>
            <?php
              echo '<img src="data:image/jpeg;base64,'.base64_encode($des_img).'"  class="img-fluid wc-image"/>';
              ?>            
              </div>
            <br>
            <div class="row">
            </div>
          </div>
          <div class="col-md-6"><br>
          <h3><?php echo $des_name;?></h3>
          <br>
              <p class="lead">
                   <i class="fa fa-inr"></i> <?php echo $des_rent;?>&nbsp;&nbsp;
                   <i class="fa fa-users"></i> <?php echo $des_cap;?> &nbsp;&nbsp; 
                   <i class="fa fa-cutlery"></i> <?php echo $des_veg_nonveg;?>
              </p>
              <br>
  <a href="https://www.google.com/maps/place/Vijya+Laxmi+Banquet+Hall/@21.1477936,72.7697398,17z/data=!3m1!4b1!4m6!3m5!1s0x3be04d89d6496471:0xd1c4d8b4e7b13101!8m2!3d21.1477936!4d72.7723147!16s%2Fg%2F1s04j5b64">
  <i class="fa fa-map-marker"></i>  <strong><?php echo $des_city;?></strong></a>
              <br><br>
              <h6>Type: <?php echo $des_type;?> </h6>   
              <br>
              <h6>Price Per Plate: <?php echo $des_ppp;?> </h6> 
              <br>  
              <h6>Google Rating: <?php echo $des_rating;?></h6>
              <br> 
              <h6>Contact No: <?php echo $des_phone;?></h6>   
              <br>    
              <div class="col-md-4">
              <button  style="background-color: #17202A ; padding: 5px 10px;" >  
              <a href="wishlist.php?p_id=<?php echo $p_id ?>&des_name=<?php echo $des_name?>&des_rent=<?php echo $des_rent?>&des_link=<?php echo $des_link?>" stytle="color: white;">
    <i class="fa fa-heart" aria-hidden="true"></i> Wishlist</a></button>
    </div> 
          </div>
        </div>
        <hr color=black>
      </div><br><br><br><br>
    </div>  
    <?php
          }
        }
    ?>
    

    

         

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <p><b>Copyright © 2023 Company Name - L.M.E.</p>
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