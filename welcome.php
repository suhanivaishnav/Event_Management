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
$conn = mysqli_connect("localhost", "root", "", "l.m.e."); 
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
session_start();
        if(ISSET($_POST['login'])){
            $Login_id = $_POST['Login_id'];
            $Login_psswd = $_POST['Login_psswd'];
             
                    
     
    
            $sql = "select *from customer where Login_id = '$Login_id' && Login_psswd = '$Login_psswd'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            


            if($count == 1){  
                $_SESSION['UserName']=$Login_id;
              header( "Location: customerpage.php" ); 
            }  
            else{  
                
                echo "<script>  
                        alert('Login failed. Invalid username or password.');  
                        window.location.href = 'login.php';
            </script>";
            }
        }
?>


<?php
session_start();
echo $_SESSION['UserName'];
?>