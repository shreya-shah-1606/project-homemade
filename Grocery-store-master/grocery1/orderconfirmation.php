<?php include 'includes/header.php';
require('connect.php');
if(isset($_SESSION['email'])){
$orderid = $_GET['orderid'];
$email = $_SESSION['email'];
//$itemid = $_GET['itemid'];
$query = "SELECT * FROM `orders` WHERE orderid='$orderid'";
$result = mysql_query($query);
$nor = mysql_num_rows($result);

}

?>
<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Order Confirmation</li>
			</ul>
		</div>
	</div>

</br>				  
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">								
								<h3 align="center">Order is placed successfully, Order ID - <?php echo $orderid?> </h3>
																
					</div>
				</div>
				
				<div class="panel-body">
<?php
					while($row = mysql_fetch_array($result))
					{	   
?>				
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="images/<?php echo $row['img'] ?>" width="100px">
						</div>
						<div class="col-xs-7">						
						<h4 class="product-name"><strong>Name:<?php echo $row['product']?></strong></h4>
						<h4 class="product-name"><strong>Price:$<?php echo $row['price']?>.00</strong></h4>
						</div>
					</div>
					
			
					
					<?php
}


						?>
						<?php if($nor != 0){ ?>
						
						<?php } ?>
				</div>				
			</div>
		</div>
	</div>
</div>
						
						</br>
						<?php include 'includes/footer.php';
						?>
						