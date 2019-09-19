<?php include 'includes/header.php';?>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a><span>|</span></li>
				<li>Shipping Address</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		
		<div class="w3l_banner_nav_right">
<!-- mail -->
		<div class="mail">
			<h3>Shipping Address</h3>
			<div class="agileinfo_mail_grids">
				<div class="col-md-4 agileinfo_mail_grid_left">
					<ul>
						<li><i class="fa f-home" aria-hidden="true"></i></li>
						<li>Payment<span>Cash On Delivery</span></li>
					</ul>
					
				</div>
				<div class="col-md-8 agileinfo_mail_grid_right">
					<form action="address_details.php" method="POST">
						<div class="col-md-6 wthree_contact_left_grid" id="name">
							<input type="text" name="ename" id="ename" placeholder="Name*" required="">
							<input type="email" name="email" id="email" placeholder="Email*" required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="telephone" id="telephone" placeholder="Telephone*" required="" maxlength="10" >
							<input type="text" name="landmark" id="landmark" placeholder="Landmark*" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea  name="address" id="address" placeholder="Address*" required=""></textarea>
						<input type="reset" value="Clear">
						<input type="submit" value="Proceed >>" id="submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<script type="text/javascript">
						$(document).ready(function() {    
						$('#submit').click(function(){
						var ename = $('#ename').val();
						var email = $('#email').val();
						var tel = $('#telephone').val();
						var landmark = $('#landmark').val();
						var address = $('#address').val();
						if( ename != '' && email != '' && tel != '' && landmark != '' && address != '' )
						{
						$.post("address_details.php", {ename:ename,email:email,tel:tel,landmark:landmark,address:address});
						}
						else
						{
							alert("Please Enter all the details");
						}
						});
						});
					</script>
<!-- //mail -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- map -->
	
<!-- //map -->
<!-- newsletter -->
	
<!-- //newsletter -->

<?php include 'includes/footer.php'?>