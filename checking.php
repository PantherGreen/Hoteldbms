<?php
include_once('connection.php');
function reg_in()
{
if(isset($_POST['submit']))
	{
		$check_in = $_POST['in'];
		$check_out = $_POST['out'];
		$room_type1 = $_POST['room'];
		$room_type2 = $_POST['type'];
		if(mysql_query("INSERT INTO `check` (`check_in`,`check_out`,`room_type1`,`room_type2`)
 VALUES ('$check_in','$check_out','$room_type1','$room_type2')"))
		{
			
			header('Location: C:/wamp64/www/Hotel management system/index.html');
		}
		else
			echo mysql_error();
	}
}	
if(isset($_POST['submit']))
{
	reg_in();
	//echo ' succesfully inserted';
}
else
	echo 'error';
?> 