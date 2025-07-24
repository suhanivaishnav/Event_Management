
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

 $p_id = $_GET['p_id']; 
 

    $delWishlist = "DELETE FROM wishlist WHERE p_id='$p_id'";   
	if(mysqli_query($con, $delWishlist)){
        header('location:show-wishlist.php');

    }


?>