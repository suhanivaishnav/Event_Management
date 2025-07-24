<?php
session_start();
?>

<?php 
                    if (isset($_SESSION['UserName']))
                    {
                      echo $_SESSION["UserName"];
                    }
                  ?>

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
 $Login_id = $_SESSION["UserName"]; 
 $p_id=$_GET["p_id"];
 $des_name=$_GET["des_name"];
 $des_rent=$_GET["des_rent"];
 $des_link=$_GET["des_link"];

 $sql_Check = "SELECT * FROM wishlist where p_id = $p_id ";
 $result_check = mysqli_query($con, $sql_Check);

 if (mysqli_num_rows($result_check) == 1) { 
   echo "<script>  
   alert('Already exists.');  
   window.location.href = 'packages.php';
</script>";
   
   
}

else{

    $insertWishlist = "INSERT INTO wishlist (Login_id, p_id,name,price,link) VALUES ('$Login_id', '$p_id','$des_name','$des_rent','$des_link')";   
	if(mysqli_query($con, $insertWishlist)){
      echo "<script>  
      alert('Data  Inserted');  
      window.location.href = 'packages.php';
   </script>";}
      
 }


//  $total = $total +  ($row_cart['price'] * $value['quantity']);


?>