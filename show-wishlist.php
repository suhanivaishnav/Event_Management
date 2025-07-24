
 <?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "l.m.e.";  
    
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
              ?> 
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
  <br><br><br><br>
 
 

    <h2 align=center>My Wishlist</h2>

    <section id="content">
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
				 
					<div class="col-md-12">

		 
			<br>
			<table class="cart-table account-table table table-bordered bg-white text-dark">
				<thead>
					<tr>
						<th>Name</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
				 $Login_id = $_SESSION['UserName'];
  
				$sql = "SELECT * FROM wishlist where Login_id='$Login_id'";
				$result = mysqli_query($con, $sql);
				
				if (mysqli_num_rows($result) > 0) {
				 // output data of each row
				 while($row = mysqli_fetch_assoc($result)) {
 			?>
					<tr>
						<td>
                        <a href="<?php echo $row["link"]?>">	<?php echo $row["name"] ?></a>
						
						</td>
						<td>
						<?php echo $row["price"] ?>
						</td>
					 
						
						<td>
							<a href="delete-wishlist.php?p_id=<?php echo $row["p_id"] ?>&Login_id=<?php echo $_SESSION['UserName'] ?>">Delete</a> 
							 
						</td>
					</tr>
				 
			
			<?php
				}
			   } else {
				 echo "0 results";
			   }
			 
			 
			 ?>




				
				</tbody>
			</table>		

		 
 



			</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
 
</div>
