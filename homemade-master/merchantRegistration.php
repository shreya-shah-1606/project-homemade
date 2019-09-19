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
	$address=$_POST['address'];
	$products=$_POST['product'];
	
	$str="";
	foreach($products as $x)
	{
		$str=$str." ".$x;
	}
	$query="insert into merchant(name,m_id,address,email,products,password) values('$uname','$contactno','$address','$emailid','$str','$password')";
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
		<title> Merchant Registration </title>
		<style type="text/css">
			input{
				background-color: transparent;
				border: 1px solid navy;
			}
		</style>
	</head>
	<body> <center>
			<div align="center" style="margin-top:30px; border: 2px solid yellow; width:370px; height:630px; font-family: Perpetua; font-size: 24px; color: green; border-radius: 10px;">
			<h3 style="color: maroon;"> MERCHANT REGISTRATION </h3> 
			<form method="post" action="">
				NAME: <input type="text" name="name"/> <br><br>
				Email: <input type="email" name="email" /> <br><br>
				Contact Number: <input type="number" name="number" /> <br><br>
				Password: <input type="text" name="password"/><br><br>
				Address: <textarea cols="20" rows="4" name="address"> </textarea> <br><br>
				Products: <br>
				<input type="checkbox" name="product[]" id="product" value="handicrafts" /> Handicrafts <br>
				<input type="checkbox" name="product[]" id="product" value="jewelery" /> Jewelery <br>
				<input type="checkbox" name="product[]" id="product" value="snacks" /> Snacks <br>
				<input type="submit" value="Sign up" name="s" style="height: 30px; width: 65px; border-radius: 5px; background-color: yellow;font-family: Perpetua; font-size: 18px; " /><br>
			</form>
			<div>
			<a href="index.php" style="text-decoration: underline;"> Go back to main page </a>
			</center>
	</body>
</html>
