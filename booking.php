<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotelmgmt';
$conn = new mysqli($host, $username, $password, $dbname);

        $name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mobile'];
	$check_in = $_POST['in'];
	$check_out = $_POST['out'];
	$rm = $_POST['room'];
	$room_type = $_POST['type'];


$res="INSERT INTO booking (`name`,`email`,`mobile`,`check_in`,`check_out`,`room_type1`,`room_type2`) 
VALUES ('$name','$email','$mob','$check_in','$check_out','$rm','$room_type')";
header('location: payment.html');
$result=mysqli_query($conn,$res);


	
	
 
?>

