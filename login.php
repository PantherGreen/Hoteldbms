<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotelmgmt';
$conn = new mysqli($host, $username, $password, $dbname);

		$uname = $_POST['usrname'];
		$pwd = $_POST['pswd'];
		
		$res = "INSERT INTO `login` (`username`,`password`) VALUES ('$uname','$pwd')";
		
		$result=mysqli_query($conn,$res)	;	
		$check="SELECT  * FROM `login` WHERE $uname=username AND $pwd=password";
   $ck=mysqli_query($conn,$res);
 if($ck==1)			
      { header('Location: book.html');
        echo 'successful';}
		else 
		{	echo 'you have entered incorrect credentials. please try again';
		header ('Location: book.html');
			}
	

?>