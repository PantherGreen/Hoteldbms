<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotelmgmt';
$conn = new mysqli($host, $username, $password, $dbname);
	$card_type = $_POST['type'];
	$m = $_POST['month'];
	$y = $_POST['year'];
	$card_no = $_POST['num'];
	$card_name = $_POST['name'];
	$c_no = $_POST['cvv'];
	$pass = $_POST['password'];
			$res = "INSERT INTO `payment` (`card_type`,`month`,`year`,`card_no`,`card_name`,`cvv`,`email`,`pass`)
			VALUES ('$card_type','$m','$y','$card_no','$card_name','$c_no','$pass')";
		echo 'booking successfull.... all the best...';
		echo "<br><br><br>";
		echo 'ac and non-ac bookings with checkout dates';
		echo "<br><br>";
		$x = mysqli_query($conn,"CALL proc") or die("Query fail: " . mysqli_error());

  //loop the result set
  if ($x->num_rows > 0) {
    // output data of each row
    while($row = $x->fetch_assoc()) {
        echo  $row["check_out"]. "      "  .$row["room_type1"] ."<br>";
    }
} else {
    echo "0 results";
}
		$result=mysqli_query($conn,$res)	;	

?>