<?php session_start();
/*  Developed by Bore Kirui */

// if session is not set redirect the user
if(empty($_SESSION['u_name']))
	header("Location:index.html");	

//if logout then destroy the session and redirect the user
if(isset($_GET['logout']))
{
	session_destroy();
	header("Location:index.html");
}	

echo "<br/><center><h4><a href='secure.php?logout'><b>Logout</b></a></h4></center>";
?>
<!doctype html>
<html>
	<head>
		<title>You Have Successfully Loged In To your Account Using Ajax</title>
		<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	<center>
	<br/>
		<h2>  You have Logged In using A ajax Login System</h2>
		<br/>
		
	</center>
	</body>
</html>