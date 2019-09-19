<?php
error_reporting(E_ERROR | E_PARSE);
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

	$dbuser="root";
	$dbpass="";
	$host="localhost";
	$db="home_made";
	$conn =mysql_connect($host,$dbuser,$dbpass);
	mysql_select_db($db,$conn);
	
	 if(!isset($_SESSION['login_session']))
	 {			
			include('header.html'); 		
	 }
	 else
	 {
			include('headerlogout.html'); 
	 }	
	 $u_id=$_SESSION['login_session'];
		//echo "<script> alert('$u_id'); </script>";
		
	if($_POST['list'])
	{
		$lists=$_POST['list'];
		$id=$_POST['i'];
		$m_id=$_POST['mid'];
		$qty=$_POST['qty'];
		$price=$_POST['price'];
		$amt=$_POST['amt'];
		$p_name=$_POST['p_name'];
	$query="DELETE FROM pending where id='$id'";
	$s1=mysql_query($query,$conn);
	}
	static $i=1;
	 if($_POST['s'])
	 {
		
		$lists=$_POST['list'];
		$id=$_POST['i'];
		$m_id=$_POST['mid'];
		$qty=$_POST['qty'];
		$price=$_POST['price'];
		$amt=$_POST['amt'];
		$p_name=$_POST['p_name'];
		
	 	
				$query1="UPDATE pending SET status='1',order_id='$i'";
				$result1=mysql_query($query1,$conn);
				$i=$i+1;
				
				$query2="SELECT * from pending where status='1'";
				$result2=mysql_query($query2,$conn) or die($query."<br/><br/>".mysql_error());
				while ($row=mysql_fetch_array($result2)) 
				{
					$m_id=$row['m_id'];
					$qty=$row['qty'];
					$price=$row['price'];
					$amt=$row['qty']*$row['price'];
					$p_name=$row['p_name'];
					$query3="insert into final_order(u_id,m_id,p_name,qty,price,amount) values('$u_id','$m_id','$p_name','$qty','$price','$amt')";
					$result3=mysql_query($query3,$conn) or die($query."<br/><br/>".mysql_error());
			
				}
				
				header('location:receipt.php');
	 	

	 } 
?>

	<h1>My Orders</h1><br>
	<?php 
		

		$user_check=$_SESSION['login_session'];
		//echo $user_check;
		$query="SELECT * FROM pending WHERE u_id='$user_check'";
		$result=mysql_query($query,$conn) or die($query."<br/><br/>".mysql_error());
		//echo $result;
	?>
	
	<form method="post" >
		<?php
			
			while ($row=mysql_fetch_array($result)) {
		?>	
			<input type="text" name="p_name" value="<?php echo $row['p_name']; ?>" />
			<input type="text" name="qty" value="<?php echo $row['qty']; ?>" />
			<input type="text" name="price" value="<?php echo $row['price']; ?>" />
			<input type="text" name="amt" value="<?php echo $row['qty']*$row['price']; ?>" />
			<input type="text" name="i" value="<?php echo $row['id']; ?>" hidden="hidden" />
			<input type="text" name="mid" value="<?php echo $row['m_id']; ?>" hidden="hidden" />
			<input type="submit" name="list" id="list" value="delete item" ></br>
			
		<?php
			
			}
		?>
	<input type="submit" name="s" value="Confirm Order">
</body>
</html>	