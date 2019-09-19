<?php
error_reporting(E_ERROR | E_PARSE);
$dbuser="root";
$dbpass="";
$host="localhost";
$db="home_made";
$conn =mysql_connect($host,$dbuser,$dbpass);
mysql_select_db($db,$conn);

if($_POST['s'])
{
	$uname=$_POST['name'];
	$contactno=$_POST['number'];
	$emailid=$_POST['email'];
	$password=$_POST['password'];

	$query="insert into user(name,u_id,email,password) values('$uname','$contactno','$emailid','$password')";
	$s1=mysql_query($query,$conn);
	if($s1)
	{
		echo "<script>alert('successful');</script>";
	}
	else
	{
		echo "<script>alert(mysql_error());</script>";
	}
}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<style type="text/css">
			input{
				background-color: transparent;
				border: 1px solid navy;
			}
		</style>
		<title> Customer Registration </title>
	</head>
	<body><center>
			<div align="center" style="margin-top:30px; border: 2px solid yellow; width:370px; height:300px; font-family: Perpetua; font-size: 24px; color: green; border-radius: 10px;">
		
			<h3 style="color: maroon;"> CUSTOMER REGISTRATION </h3> 
			<form method="post" action="">
			NAME <input type="text" name="name"/> <br>
			Email <input type="text" name="email" /> <br>
			Contact Number <input type="text" name="number" /> <br>
			Password <input type="password" name="password"/><br>
			<input type="submit" value="Sign up" name="s"/><br>
			</form>
			<div>
			<a href="index.php" style="text-decoration: underline;"> Go back to main page </a>
			</center>
	</body>
</html>
