<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	//Serverdata
	$servername = "localhost";
	$server_username = "root";
	$server_password = "";
	$dbName = "home_made";
	
	
	if(isset($_SESSION['login_session'])){		
		echo "alert('session set')";
		header("location:index.php");//Redirecting to homepage
	}
	//Make Connection
	$conn = new mysqli($servername,$server_username,$server_password,$dbName);
	if($conn)
	{
		//echo nl2br("connection_status = Established \n\r");
	}
	else
	{
		echo nl2br("connection_status = No Connection\n\r");		
	} 
	if($_POST['submit']) 
	{
	
		$u_id=$_POST['u_id'];
		$password=$_POST['password'];
		
      
      $sql = "SELECT * FROM user WHERE u_id = '$u_id' and password = '$password'";
-      $result = mysqli_query($conn,$sql);
      
	  if(mysqli_num_rows($result)==1)
	  {
		  $_SESSION['login_session']=$u_id;
		  echo "alert('set')";
		  header("location:index.php");// what user will see after logging in
		  echo "true";
	  }
	  /*else
	  {
		  $sql = "SELECT * FROM merchant WHERE m_id = '$m_id' and password = '$password'";
		  $result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)==1)
			{
				  $_SESSION['login_session']=$u_id;
				  header("location://write location of page that merchant will see//");// what merchant will see after logging 																											in
				  echo "true";
			}else{
			echo nl2br("<h1 style='color:red'>Email or Password is Incorrect , Please Recheck Credentials. \n</h1>");
			}
		  
	  }*/
	}
	?>
<html>
	<head>
		<title> Login </title>
		<!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
		<style type="text/css">
			input{
				background-color: transparent;
				border: 1px solid navy;
			}
		</style>
	</head>
	<body> <center>
	 <?php include('header.html');?>
		<style><?php include 'index.css'; ?></style>
		<!-- Header -->
			<!--<header id="header" class="skel-layers-fixed">-->
			<div align="center" style="margin-top:30px; border: 2px solid yellow; width:370px; height:450px; font-family: Perpetua; font-size: 24px; color: green; border-radius: 10px;">
			<h3 style="color: maroon;"> Homemade - Login :<span> Fill Information. </h3> 
			<!--</header>-->
			
	<!-- Form -->
			<h3>Login</h3>
				<form method="post" >
					Contact number: <input type="text" name="u_id" id="u_id" value="" placeholder="Mobile number" />  <br><br>
					Password: <input type="password" name="password" id="password" value="" placeholder="Password" />
					<ul class="actions">
						<li><input type="submit" name="submit" value="Login" style="border-radius: 5px;" /></li>
						<li><input type="reset" name="reset" value="Reset" class="alt" style="border-radius: 5px;" /></li>
					</ul>
				</form>

		<a href="signuplogin.html" style="text-decoration: underline;"> Not a member?  Register here</a>
		</div>
	</center>
</body>
</html>