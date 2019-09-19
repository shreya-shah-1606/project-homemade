<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<h1> Your Bill</h1>
<?php 

	$dbuser="root";
	$dbpass="";
	$host="localhost";
	$db="home_made";
	$conn =mysql_connect($host,$dbuser,$dbpass);
	mysql_select_db($db,$conn);
	
	$u_id=$_SESSION['login_session'];
	?>
	<table border='3'>
	<?php
	
	$query2="SELECT * from final_order where u_id='$u_id'";
				$result2=mysql_query($query2,$conn) or die($query2."<br/><br/>".mysql_error());
				$total=0;
				?>
				<th><?php echo "product name" ?></th>
				<th><?php echo "quantity" ?></th>
				<th><?php echo "price" ?></th>
				<th><?php echo "amount" ?></th>
				
				<?php while ($row=mysql_fetch_array($result2)) 
				{?>
				
				<tr>
					<td><?php echo $row['p_name'] ?></td>
				
					<td><?php echo $row['qty'] ?></td>
				
					<td><?php echo $row['price'] ?></td>
				
					<td><?php
							$amt=$row['price']*$row['qty'];
					 echo $amt; 
					 $total=$amt+$total;
					 ?></td>
			
				</tr>
				<?php
				}
				?>

	</table>
	Bill Amount: <?php echo $total; ?><br/><br/>
	Payment mode will be Cash On Delivery.<br/><br/>
	<a href="index.php" style="text-decoration: underline;"> Go back to main page </a>
	<center>
	</body>
</html>