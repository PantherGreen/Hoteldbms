<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotelmgmt';
$conn = new mysqli($host, $username, $password, $dbname);
     
		$name = $_POST['name'];
		$mob = $_POST['mobile'];
		$email = $_POST['email'];
		$uname = $_POST['username'];
		$pwd = $_POST['pswd'];
		
		$res = "INSERT INTO `signup` (`name`,`mobile`,`email`,`username`,`password`) VALUES ('$name','$mob','$email','$uname','$pwd')";
		
		$result=mysqli_query($conn,$res)	;	
		$check="SELECT  * FROM `login` WHERE $uname=username AND $pwd=password";
 if($check==1)			
      { header('Location: book.html');
        echo 'successful';}
		else 
			echo 'you have entered incorrect credentials. please try again';
		header ('Location: book.html');
		
	

?>