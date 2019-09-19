<?php include 'includes/header.php';
$nor = 0;
?>
<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>My Orders</li>
			</ul>
		</div>
	</div>
<?php
require('connect.php');
if(isset($_SESSION['email'])){
$email = $_SESSION['email'];
$query = "SELECT * FROM `orders` WHERE email='$email'";
$result = mysql_query($query);
$nor = mysql_num_rows($result);

if($nor == 0) {
	echo "</br>";
	echo "<script>";	
    echo "alert ('No orders')";
    echo "</script>";
}
}
else{
	$result = 0;
}
?>
</br>				  
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">								
								<h3 align="center">My Orders</h3>
																
					</div>
				</div>
				
				<div class="panel-body">
<?php
if($result!=0){
					$check = 0;
					while($row = mysql_fetch_array($result)){	
					$check = 1;
					

   
?>				
		
        <div style="border:1em solid #333; background-color:#f1f1f1; border-radius:5em; padding:16em;" align="center";>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="images/<?php echo $row['img'] ?>" width="100px">
						
						<script type="text/javascript">
						$(document).ready(function() {
   $('img, .product-name').mouseenter(function() {
       $(this).animate({
           height: '+=10px'
       });
   });
   $('img, .product-name').mouseleave(function() {
       $(this).animate({
           height: '-=10px'
       }); 
   });
   $('img, .product-name').click(function() {
       $(this).toggle(1000);
   }); 
});
</script>
						
						</div>
						<div class="col-xs-7">						
						<h4 class="product-name"><?php echo $row['product']?></h4>
						<h4 class="product-name"><?php echo $row['price']?>.00</h4>
						
						</div>
						
						<div class="col-xs-3">
							
								
							 <a href="feedback.php" style="margin-top:5px;"> Feedback</a>
							
						</div>
						
					</div>
					</div>
					<hr>
					
					
					
					<?php
}
if($check == 0)
{
?><div class="row">No orders</div>
<?php
}
}

else{
						

echo "</br>";
echo "<script>";	
echo "alert ('Please Login ...')";
echo "</script>";
echo "<h4 align='center'>";	
echo "<font class='bg-danger'>Please Login ...</font>";
echo "</h4>";
}
						?>
					
						</br>
						<?php include 'includes/footer.php'?>