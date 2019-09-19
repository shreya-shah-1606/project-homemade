<?php
session_start();

$order = '';
require('connect.php');
$username = $_SESSION['userID'];
$email = $_SESSION['email'];

		$sql= mysql_query("SELECT max(id) FROM orders");
		$id=mysql_result($sql,0,0);	
		$id = $id + 1;
		$phone = '';
		if(isset($_POST['telephone']))
		{
		$phone	=	$_POST['telephone'];
		}
		$cart= mysql_query("SELECT * FROM cart WHERE userID='$username'");
		$count=mysql_num_rows($cart);
		if($count>0)
		{	
			while($row=mysql_fetch_array($cart))
			{	
			$itemid = $row['itemid'];
			$prod= mysql_query("SELECT * FROM items where itemid = '$itemid'");
			while($prodrel=mysql_fetch_array($prod))
				{
				$product	=	$prodrel['itemname'];
				$price		=	$prodrel['amount'];
				$img		=	$prodrel['iimg'];
				}
			$email		=	$email;
			$name		=	$_POST['ename'];
			$demail		=	$_POST['email'];
			$landmark	=	$_POST['landmark'];
			$address	=	$_POST['address'];
			echo $id;
			$order = mysql_query("INSERT into orders (orderid,email,product,price,name,demail,phone,landmark,address,img) values ('$id','$email','$product','$price','$name','$demail','$phone','$landmark','$address','$img')");
			$cartdel = mysql_query("DELETE FROM cart WHERE userID = '$username' AND itemid = '$itemid'");
			}
		}
		
		$sql= mysql_query("SELECT max(orderid) FROM orders");
		$orderid=mysql_result($sql,0,0);	?>
		<script>
			window.location='orderconfirmation.php?orderid=<?php echo $orderid ?>';
		</script>