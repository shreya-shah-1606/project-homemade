<?php
error_reporting(E_ERROR | E_PARSE);
	session_start();
	//Serverdata
			$servername = "localhost";
			$server_username = "root";
			$server_password = "";
			$dbName = "home_made";
			
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
	
	
	//storing session
	$isAdmin =2;//LoggedOut
	$user_check = $_SESSION['login_session'];
	$query = mysqli_query($conn,"Select * from user where u_id='$user_check'");
	$result= mysqli_fetch_assoc($query);
	if(mysqli_num_rows($query)==1)
	{
		$isAdmin = 0;//login is user
		echo "user";
		$login_session ="".$result['u_id']."";
		$u_id = "".$result['u_id']."";
		$m_id = "".$result['m_id']."";
		$email = "".$result['email']."";
		$password = "".$result['password']."";
	}
	else{
		echo "merchant";
		$isAdmin = 1;//login is merchant
		$query = mysqli_query($conn,"Select * from merchant where u_id='$user_check'");
		$result= mysqli_fetch_assoc($query);
		$login_session ="".$result['u_id']."";
		$u_id = "".$result['u_id']."";
		$m_id = "".$result['m_id']."";
		$email = "".$result['email']."";
		$password = "".$result['password']."";
	}
	
	
	
	if(!isset($login_session)){
		mysqli_close($conn);		
		header('location:index.php');//Redirecting to homepage
	}
?>