<?php
$conn = mysqli_connect("localhost", "root", "", "l.m.e."); 
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
$Login_id=$_REQUEST['Login_id']; 
$Login_psswd=$_REQUEST['Login_psswd'];
$cust_Fname=$_REQUEST['cust_Fname']; 
$cust_Lname=$_REQUEST['cust_Lname']; 
$cust_DOB=$_REQUEST['cust_DOB'];
$cust_city=$_REQUEST['cust_city']; 
$cust_state=$_REQUEST['cust_state']; 
$cust_Contact=$_REQUEST['cust_Contact']; 
$cust_email=$_REQUEST['cust_email'];


$sql = "INSERT INTO customer  VALUES('$Login_id','$Login_psswd','$cust_Fname','$cust_Lname','$cust_DOB','$cust_city','$cust_state',
'$cust_Contact','$cust_email');"; 
if(mysqli_query($conn, $sql))
{
header( "Location:login.php" ); 
} 
else
{
echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
}
mysqli_close($conn);
?>
