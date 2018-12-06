<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotelmgmt';
$con=mysqli_connect($host,$username,$password,$dbname);
 if($con->connect_error)  
{
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
