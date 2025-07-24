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

  <body style="background: #D7BDE2;">

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
    
        <div class="container" style="background: #D7BDE2;">
          <div class="row">
            <div class="col-md-12">
            </div>
          </div>
        </div>
      </div>

    <div class="products" style="background: #D7BDE2; margin-top: 50px;">
      <div class="container">
        <div class="row">
        <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from products where id=8"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
          $c_id=$row['id'];
          $p_id=$row['p_id'];
          $c_name=$row['product_name'];
          $c_price=$row['price'];
          $c_brand=$row['brand'];
          $c_rating=$row['size'];
          $c_phone=$row['contact'];
          $c_img=$row['c_img'];  
          $c_link=$row['C_Link'];
          if($c_id==8)
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
              echo '<img src="data:image/jpeg;base64,'.base64_encode($c_img).'"  class="img-fluid wc-image"/>';
              ?>            
              </div>
            <br>
            <div class="row">
            </div>
          </div>
          <div class="col-md-6"><br>
          <h3><?php echo $c_name;?></h3>
          <br>
              <p class="lead">
                   <i class="fa fa-inr"></i> <?php echo $c_price;?>&nbsp;&nbsp;
              </p>
              <br> 
              <h6>Types Cuisines: <?php echo $c_brand;?></h6>
              <br> 
              <h6>Google Rating: <?php echo $c_rating;?></h6>
              <br> 
              <h6>Contact No: <?php echo $c_phone;?></h6>   
              <br>
              <div class="col-md-4">
              <button  style="background-color: #17202A ; padding: 5px 10px;" > 
              <a href="wishlist3.php?p_id=<?php echo $p_id ?>&c_name=<?php echo $c_name?>&c_price=<?php echo $c_price?>&C_Link=<?php echo $c_link?>">
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