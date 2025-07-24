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

  <body style="background: #FDEBD0;">

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
    
        <div class="container" style="background: #FDEBD0;">
          <div class="row">
            <div class="col-md-12">
            </div>
          </div>
        </div>
      </div>

    <div class="products" style="background: #FDEBD0;  margin-top: 50px;">
      <div class="container">
        <div class="row">
        <?php
          $con = mysqli_connect("localhost","root");
          mysqli_select_db($con,"L.M.E.");
          $sql="select * from dj where Dj_id=5"; 
          $result=mysqli_query($con,$sql); 
          while($row=mysqli_fetch_array($result))
          {
          $dj_id=$row['Dj_id'];
          $p_id=$row['p_id'];
          $dj_name=$row['Dj_name'];
          $dj_rating=$row['Dj_Google rating'];
          $dj_price=$row['Dj_price'];
          $dj_loc=$row['Dj_location'];
          $dj_img=$row['Dj_image'];
          $dj_contact=$row['Dj_contact'];
          $dj_email=$row['Dj_email'];
          $dj_link=$row['Dj_link'];    
          if($dj_id==5)
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
              echo '<img src="data:image/jpeg;base64,'.base64_encode($dj_img).'"  class="img-fluid wc-image"/>';
              ?>            
              </div>
            <br>
            <div class="row">
            </div>
          </div>
          <div class="col-md-6"><br>
          <h3><?php echo $dj_name;?></h3>
          <br>
              <p class="lead">
                   <i class="fa fa-inr"></i> <?php echo $dj_price;?>&nbsp;&nbsp;
              </p>
              <br>
  <i class="fa fa-map-marker"></i>  <strong><?php echo $dj_loc;?></strong>
              <br><br>
              <h6>Google Rating: <?php echo $dj_rating;?></h6>
              <br> 
              <h6>Contact No: <?php echo $dj_contact;?></h6>   
              <br> 
              <h6>E-mail: <?php echo $dj_email;?></h6>   
              <br>
              <div class="col-md-4">
              <button  style="background-color: #17202A ; width: 150px; height: 40px;" >  
              <a href="wishlist4.php?p_id=<?php echo $p_id ?>&dj_name=<?php echo $dj_name?>&dj_price=<?php echo $dj_price?>&dj_link=<?php echo $dj_link?>"><i class="fa fa-heart" aria-hidden="true"></i> Wishlist</a>    </div>          
          </div>
        </div>
        <hr color=black>
      </div>
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