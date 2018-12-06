


<!DOCTYPE>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="login.css"/>
<script type="text/javascript">
function clicked() {
    alert('Successfully submitted');
}

    $("#formname").resetForm();
</script>
</head>
<body>
<div id="holder"><a href="https://www.co.in"><img src="images/70.jpg" width="200px" height="100px"/></a>
	 <div id="header">
     
	<ul>
    	<li><a href="login.html">Login</a></li>
    	<li><a href="gallery.html">Gallery</a></li>
    	<li><a href="resta.html">Restaurant</a></li>
    	
        <li><a href="index.html">Home</a></li>
    	</ul>
    </div><!--header -->
<div id="login">
<br>
	<h1> Login</h1>
  		<div id="p"><br><br><br>
     <form action="login.php" method="post">
<label for="usrname">Username:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="" name="usrname" placeholder="Username" required="" type="text"> <br><br>
	&nbsp;&nbsp;&nbsp;
<label for="pswd">Password:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="" name="pswd" placeholder="Password" required="" type="text"> <br ><br>

<a href="overview.html"><input type="submit" name="submit" value="Confirm"/></a><br><br><br>
        <a href="signup.html">Not a user? Sign up here</a>
           <br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
        </div><!--p-->
</div><!--login-->
</div><!--holder-->
</body>
</html>
