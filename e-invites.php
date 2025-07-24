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
            <a href="customerpage.php" class="navbar-brand">
              <img src="assets/images/LME.png" alt="lme" class="logo" height="50" width="100"><!-- tried adding logo class instead of img-fluid class in styles -->
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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/e-invites.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>E-Invites</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container" >
        <div class="row">
        
        <?php
         $con = mysqli_connect("localhost","root");
         mysqli_select_db($con,"L.M.E.");
         $sql="select * from einvites"; 
         $result=mysqli_query($con,$sql); 
         while($row=mysqli_fetch_array($result))
          {
          $e_id=$row['E_ID'];
          $e_type=$row['E_Type'];
          $e_img=$row['E_Image'];
          $e_link=$row['E_link'];
          ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="<?php echo $e_link?>"><?php
              echo '<img src="data:image/jpeg;base64,'.base64_encode($e_img).'" />';
              ?></a>
              <div class="down-content">
                <a href="<?php echo $e_link?>"><h4><?php echo $e_type;?></h4></a>

              </div>
            </div>
          </div>
          <?php
          }
          ?>


          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

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
